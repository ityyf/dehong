<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;

class IconsController extends CommonController
{
	//产品展示
    public function icons(){
        return view('index/icons');
    }

    //产品详情
    public function codes()
    {
    	return view('index/codes');
    }

    
    



}