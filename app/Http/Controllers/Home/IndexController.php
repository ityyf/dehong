<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends CommonController
{
	//首页
    public function index(){
        return view('index/index');
    }

    
    



}
