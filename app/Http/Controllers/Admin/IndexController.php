<?php

namespace App\Http\Controllers\Admin;
header('content-type:text/html;charset=utf-8');

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
class IndexController extends Controller
{

    public function index(){
        $session = new session;
        $name = $session->get('admin_name');
        //管理员登陆记录
       $loginRecord = DB::table('admin')->select('login_ip','login_time')->orderBy('login_time','desc')->take(4)->get();
        //服务器信息
            //PHP版本
            $systemInfo['php_version']=PHP_VERSION;
            //mysql版本
            $systemInfo['mysql_version']=5.5;
            //操作系统
            $systemInfo['system'] =PHP_OS;
            //客户端主机名称
            $systemInfo['host']= $_SERVER['REMOTE_ADDR'];
            //文件上传限制
            $systemInfo['max_files_length'] = ini_get('upload_max_filesize');
            //gd库支持
            $gdInfo = gd_info();
            $systemInfo['gd_info']=$gdInfo['GD Version']?"是":"否";
            //web服务器
            $systemInfo['server_software']=$_SERVER['SERVER_SOFTWARE'];         
        return view('admin.Index.index',['name'=>$name,'loginRecord'=>$loginRecord,'systemInfo'=>$systemInfo]);
    }
}