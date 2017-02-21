<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use DB;
class NewsController extends CommonController
{
	//新闻中心
    public function news(){
    	//最新添加
    	$data=DB::table('news')->orderBy('n_id','desc')->paginate(5);
        return view('index/news',['data'=>$data]);
    }

    //新闻详情
    public function news_list($n_id)
    {
    	$data=DB::table('news')->where(['n_id'=>$n_id])->first();
    	
    	return view('index/news_list',['data'=>$data]);
    }

    //上一篇
    protected function getPrevArticleId($n_id)
  	{
    	$n_id=News::where('n_id', '<', $n_id)->max('n_id');
    	// echo $n_id;die;
    	if(!empty($n_id))
    	{
    		$data=DB::table('news')->where(['n_id'=>$n_id])->first();
            
    		return view('index/news_list',['data'=>$data]);
    	}else{
    		echo "<script>alert('当前为第一篇');history.go(-1);</script>";
    	}
  	}

  	//下一篇
  	protected function getNextArticleId($n_id)
	{

    	$n_id=News::where('n_id', '>', $n_id)->min('n_id');
    	if(!empty($n_id))
    	{
    		$data=DB::table('news')->where(['n_id'=>$n_id])->first();
    	    
    		return view('index/news_list',['data'=>$data]);
    	}else{
    		echo "<script>alert('已经是最后一篇了');history.go(-1);</script>";
    	}
    	
  	}

}