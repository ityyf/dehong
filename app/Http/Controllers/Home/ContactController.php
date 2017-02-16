<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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

    public function message_add()
    {
        $data = htmlspecialchars(Input::get());
        print_r($data);

    }


}
