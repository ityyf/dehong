<?php

namespace App\Http\Controllers\Admin;
//字符编码
header("content-type:text/html;charset=utf-8");


use Illuminate\Http\Request;
use App\Http\Model\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;


use App\Http\Requests;

class AdminController extends CommonController
{
    //管理员添加
    public function admin_add()
    {
        $session = new session;
        $name = $session->get('admin_name');
        if($input = Input::all())
        {
            if($input['password'] != $input['r_password'])
            {
                echo "<script>alert('密码与确认密码不一致');history.go(-1)</script>";die;
            }
            date_default_timezone_set('PRC');
            $array = array(
                'admin_name'=>$input['admin_name'],
                'password'=>md5($input['password']),
                'sex'=>$input['sex'],
                'addtime'=>date('Y-m-d H:i:s'),
                'age'=>$input['age'],
                'phone'=>$input['phone'],
                'email'=>$input['email'],
                'address'=>$input['address']
            );
            $insertId = DB::table('admin')->insertGetId($array);
            if($insertId)
            {
                //生成管理员账号
                $number = rand(1000,9999);
                $account = $input['admin_name'].$number;
                $res = DB::table('admin')->where('admin_id',$insertId)->update(array('account'=>$account));
                if($res)
                {
                    
                        return view('admin.admin.message',['title'=>   '请记录管理员账号','wait'=>7,'url'=>"javascript:history.back(-1)",'msg'=>$account]);

                }

            }
        }else
        {
            return view('admin.admin.admin_add',['name'=>$name]);
        }
    }
    //管理员列表
    public function admin_list()
    {
        $session = new session;
        $name = $session->get('admin_name');
        //查询出所有的管理员信息
        $adminUser = DB::table('admin')->select('admin_id','admin_name','last_time','login_time','login_ip')->get();
        return view('admin.admin.admin_list',['name'=>$name,'adminUser'=>$adminUser]);
    }
    //管理员详细信息
    public function admin_information()
    {
        $session = new session;
        $name = $session->get('admin_name');
        $id =  Input::get('id');
        $adminInformation = DB::table('admin')->where('admin_id',$id)->get();
        return view('admin.admin.admin_information',['name'=>$name,'information'=>$adminInformation]);
    }
    //修改管理员信息
    public function admin_update()
    {
        $id =  Input::get('id');
        $session = new session;
        $name = $session->get('admin_name');
        $adminMsg = DB::table('admin')->where('admin_id',$id)->get();
        return view('admin.admin.admin_update',['adminMsg'=>$adminMsg,'name'=>$name]);
    }

    public function admin_handle()
    {
        $data = Input::get();
        if($data['password'] != $data['r_password'])
        {
            echo "<script>alert('密码与确认密码不一致');history.go(-1)</script>";die;
        }
        $array = array(
            'admin_name'=>$data['admin_name'],
            'password'=>md5($data['password']),
            'sex'=>$data['sex'],
            'age'=>$data['age'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'address'=>$data['address'],
        );
        $res = DB::table('admin')->where('admin_id',$data['id'])->update($array);
        if($res)
        {
            return redirect('admin/admin_list');
        }

    }
    //管理员删除
    public function admin_del()
    {

      $id =   Input::get('id');
      $result = DB::table('admin')->where('admin_id',$id)->delete();
      if($result)
      {
            echo 1;
      }
    }

}
