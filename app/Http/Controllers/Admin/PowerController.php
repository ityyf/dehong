<?php

namespace App\Http\Controllers\Admin;
//字符编码
header("content-type:text/html;charset=utf-8");

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Http\Requests;

class PowerController extends CommonController
{
    //添加权限
    public function power_add()
    {
        $session = new session;
        $name = $session->get('admin_name');
        if($powerData = Input::get())
        {
            $result  = DB::table('power')->insert($powerData);
            if($result)
            {
                echo "<script>alert('添加权限成功');history.go(-1)</script>";
            }
        }else
        {
            return view('admin.power.power_add',['name'=>$name]);
        }
    }
    //权限列表
    public function power_list()
    {
        $session = new session;
        $name = $session->get('admin_name');
        $power =  DB::table('power')->get();
        return view('admin.power.power_list',['name'=>$name,'power'=>$power]);
    }
    //编辑权限
    public function power_update()
    {
        $session = new session;
        $name = $session->get('admin_name');
        $id =  Input::get('id');
        $powerData = DB::table('power')->where('p_id',$id)->get();
        return view('admin.power.power_update',['name'=>$name,'updateData'=>$powerData]);
    }

    public function power_save()
    {
        $updateData = Input::get();
        $array = array(
            'p_name'=>$updateData['p_name'],
            'p_controller'=>$updateData['p_controller'],
            'p_action'=>$updateData['p_action']
        );
        $result = DB::table('power')->where('p_id',$updateData['id'])->update($array);
        if($result)
        {
            return redirect('admin/power_list');
        }
    }
    //删除权限
    public function power_del()
    {
        $id =   Input::get('id');
        $result = DB::table('power')->where('p_id',$id)->delete();
        if($result)
        {
            echo 1;
        }
    }
}
