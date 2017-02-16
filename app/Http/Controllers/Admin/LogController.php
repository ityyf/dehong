<?php

namespace App\Http\Controllers\Admin;

//字符编码
header("content-type:text/html;charset=utf-8");

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;

class LogController extends CommonController
{
    //日志列表
    public function log_list()
    {
        $session = new session;
        $name = $session->get('admin_name');
        //查询操作日志
        $logArray = DB::table('log')->paginate(15);
        //查询出操作的管理员姓名
        foreach($logArray as $key=>$val)
        {
            $admin_id = $logArray[$key]->admin_id;
            $adminArray[] = DB::table('admin')->where('admin_id',$admin_id)->select('admin_name')->get();
        }
        $Array =array();
        foreach($adminArray as $key=>$val)
        {
            foreach($val as $k=>$v)
            {
                $Array[]['admin_name']=$v->admin_name;
            }
        }
        //将日志数组内管理员id替换为管理员姓名
        foreach($logArray as $key=>$val)
        {
            foreach($Array as $k=>$v)
            {
                if($key == $k)
                {
                     $val->admin_id=$v['admin_name'];
                }
            }
        }
        return view('admin.log.log_list',['logArray'=>$logArray,'name'=>$name]);

    }
    //批量删除
    public function deletemore()
    {
        $ids = Input::get('delitems');
        $result = DB::table('log')->whereIn('log_id',$ids)->delete();
        if($result)
        {
            echo 1;
        }
    }
}
