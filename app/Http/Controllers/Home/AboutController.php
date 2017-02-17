<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AboutController extends CommonController
{
	//公司简介
	public function about()
	{
		$firm = DB::table('firm')->where(['f_id'=>1])->first();
    	return view('index/about',['firm'=>$firm]);
    }


}