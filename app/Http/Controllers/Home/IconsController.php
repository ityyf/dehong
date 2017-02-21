<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class IconsController extends CommonController
{
	//产品展示
    public function icons(){
    	$category=DB::table('category')->where(['c_type'=>1])->get();

        return view('index/icons',['category'=>$category]);
    }

    //产品详情
    public function codes($p_id){
    	echo $p_id;
        // return view('index/codes');
    }

    //产品信息
    public function details($c_id)
    {
    	
    	//获得产品p_id  
    	$p_id=DB::table('product')->where(['c_id'=>$c_id])->pluck('p_id');
        
    	//相册表与产品表关联
    	// foreach ($p_id as $val) 
    	// $data="";
    	for($i=0;$i<count($p_id);$i++){
    		$album=DB::table('album')->where(['p_id'=>$p_id[$i]])->take(1)->get();
    		$data[$i]=$album;
    	}	
    	// print_r($data);die;
    	$category=DB::table('category')->where(['c_type'=>1])->get();
		
    	return view('index/details',['category'=>$category,'data'=>$data]);

    	
    }

    
    



}