<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Scalar\DNumber;
use Storage;
use App\Http\Requests;

class ContactController extends CommonController
{
	//联系我们
    public function contact(){
        $contact_info = DB::table('firm')->where(['f_id'=>1])->first();
        return view('index/contact',['contact_info'=>$contact_info]);
    }
    //添加留言
    public function message_add()
    {
        $data['m_desc'] = htmlspecialchars(Input::get('m_desc'));
        $data['commenter'] = htmlspecialchars(Input::get('commenter'));
        $data['m_phone'] = htmlspecialchars(Input::get('m_phone'));
        $result = DB::table('message')->insert($data);
        $datas = "您收到客户".$data['commenter']."的留言"."\r\n"."留言内容为：".$data['m_desc']."\r\n"."联系方式：".$data['m_phone']."\r\n"."请尽快与客户取得联系";
        if($result)
        {
            $flag = Mail::raw($datas,function ($message)
            {
                $to = '549360180@qq.com';
                $message->from('570133578@qq.com','德宏家居');
                $message->subject('德宏家居最新动态');
                $message->to($to);

            });
            if($flag)
            {
                echo 1;
            }else
            {
                echo 0;
            }
        }
    }
    
}
