<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends CommonController
{
	//新闻中心
    public function news(){
        return view('index/news');
    }

}