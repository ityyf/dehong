<?php

namespace App\Http\Controllers\Admin;
header('content-type:text/html;charset=utf-8');

use App\Http\Controllers\Controller;
use Request;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
class IndexController extends Controller
{

    public function index(){
        $session = new session;
        $name = $session->get('admin_name');
        return view('admin.Index.index',['name'=>$name]);
    }
}