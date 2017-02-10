<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class SummaryController extends CommonController
{
	//公司简介
    public function summary(){
        return view('index/summary');
    }

    
    



}