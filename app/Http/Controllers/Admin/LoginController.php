<?php
namespace App\Http\Controllers\Admin;

use Request;
use DB;
class LoginController extends CommonController
{
    //跳转到登陆页面
    public function login(){
//        echo 1;die;
        return view('admin.Login.login');
    }
    
}
