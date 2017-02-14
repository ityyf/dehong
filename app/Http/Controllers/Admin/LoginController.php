<?php
namespace App\Http\Controllers\Admin;

//字符编码
header("content-type:text/html;charset=utf-8");

use App\Http\Model\Admin;
use App\libs\Crypt\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
class LoginController extends CommonController
{

    //跳转到登陆页面
    public function login(){
        if($input = Input::all())
        {

            $admin =  Admin::first();
            if($admin->admin_name==$input['u_name'])
            {
                if(md5($input['u_pwd'])==$admin->password)
                {
                    $session = new session();
                    $session->set('admin_name',$admin->admin_name);
                    //修改登录时间
                    date_default_timezone_set('PRC');
                    $login_ip = $_SERVER['REMOTE_ADDR'];
                    $login_time = date("Y-m-d H:i:s");
                    $login_update = array(
                        'login_time'=>$login_time,
                        'login_ip'=>$login_ip
                    );
                    DB::table('admin')->where('admin_id',$admin->admin_id)->update($login_update);
                    return redirect('admin/index');

                }else
                {
                    $array = array('msg'=>'密码不正确');
                    session(['message'=>$array]);
                    return view('admin.Login.login');
                }
            }else
            {
                $array = array('msg'=>'用户名不存在');
                session(['message'=>$array]);
                return view('admin.Login.login');
            }

        }else
        {
            return view('admin.Login.login');
        }

    }
    //退出登陆
    public function login_out()
    {
        //修改登录时间
        $admin =  Admin::first();
        $adminMsg = DB::table('admin')->where('admin_id',$admin->admin_id)->get();
        date_default_timezone_set('PRC');
        $login_update = array(
            'last_time'=>$adminMsg[0]->login_time,
            'login_time'=>date('Y-m-d H:i:s')
        );
        DB::table('admin')->where('admin_id',$admin->admin_id)->update($login_update);
        session_start();
        session_destroy();
        return redirect('admin/login');
    }
    
}
