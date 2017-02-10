<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends CommonController
{
	//联系我们
    public function contact(){
        return view('index/contact');
    }

    
    



}
