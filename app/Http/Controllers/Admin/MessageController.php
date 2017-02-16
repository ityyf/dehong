<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;


class MessageController extends CommonController
{
    //留言列表
    public function message_list()
    {
        $session = new session;
        $name = $session->get('admin_name');
        $messageArray = DB::table('message')->get();
        return view('admin.message.message_list',['message'=>$messageArray,'name'=>$name]);
    }
}
