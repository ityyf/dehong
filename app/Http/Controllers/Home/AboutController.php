<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends CommonController
{
	//公司简介
	public function about(){
    	return view('index/about');
    }


}