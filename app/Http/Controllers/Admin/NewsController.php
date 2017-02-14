<?php

namespace App\Http\Controllers\Admin;

use Request;
use DB;
use App\News;
use Illuminate\Support\Facades\Input;
class NewsController extends CommonController
{
    //新闻列表
    public function news_list(){

        $data=DB::table('news')->orderBy('n_id','desc')->paginate(10);

        return view('Admin.News.news_list',['data'=>$data]);
    }

    //删除新闻
    public function news_delete($n_id)
    {
    	$res=DB::table('news')->where(['n_id'=>$n_id])->delete();
    	if($res)
    	{
    		//返回上一页并刷新
    		echo "<script>alert('移除成功');self.location=document.referrer;</script>";
    	}else{
    		echo "<script>alert('移除失败');self.location=document.referrer;</script>";
    	}
    }

    //编辑
    public function news_edit($n_id)
    {
		// 查询分类表中新闻类型
    	$category=DB::table('category')->where(['c_type'=>2])->get();
    	//查询对应的新闻信息
    	$news=DB::table('news')->where(['n_id'=>$n_id])->first();
    	return view('Admin.News.news_edit',['category'=>$category,'news'=>$news]);
    }

    //编辑执行
    public function news_update($n_id)
    {
    	$n_title=Input::get('n_title');
    	$c_id=Input::get('c_id');
    	$n_content=Input::get('n_content');
    	$res=DB::table('news')->where(['n_id'=>$n_id])->update([
    		'n_title'=>$n_title,
    		'c_id'=>$c_id,
    		'n_content'=>$n_content
    		]);
    	if($res)
    	{
    		echo "<script>alert('修改成功');self.location=document.referrer;</script>";
    	}else{
    		echo "<script>alert('修改失败');self.location=document.referrer;</script>";
    	}
    }


    //新闻添加
    public function news_add()
    {
    	// 查询分类表中新闻类型
    	$category=DB::table('category')->where(['c_type'=>2])->get();
    	
        return view('Admin.News.news_add',['category'=>$category]);
    }

    // 接值入库
    public function news_data()
    {
    	
    	$n_title=Input::get('n_title');
    	$c_id=Input::get('c_id');
    	$n_content=Input::get('n_content');
    	$n_addtime=time();
    	$n_author='刘威'; //添加人根据登录账号获取
    	$res=DB::insert(
    		'insert into dh_news(n_title,n_content,n_addtime,n_author,c_id)values(?,?,?,?,?)',
    		["$n_title","$n_content","$n_addtime","$n_author","$c_id"]
    		);
    	if($res)
    	{
    		echo "<script>alert('添加成功');location.href='news_list'</script>";
    	}else{

    		echo "<script>alert('添加失败');location.href='news_add'</script>";
    	}
    }

    //新闻详情页
    public function detail($n_id)
    {
		
    	$data=DB::table('news')->where(['n_id'=>$n_id])->first();
    	//查找上一篇的标题
        $data1=DB::table('news')->where(['n_id'=>$n_id-1])->first();
        //查找上一篇的标题
        $data2=DB::table('news')->where(['n_id'=>$n_id+1])->first();
    	return view('Admin.News.detail',['data'=>$data,'data1'=>$data1,'data2'=>$data2]);
    }

    //上一篇
    protected function getPrevArticleId($n_id)
  	{
    	$n_id=News::where('n_id', '<', $n_id)->max('n_id');
    	if(!empty($n_id))
    	{
    		$data=DB::table('news')->where(['n_id'=>$n_id])->first();
            
    		return view('Admin.News.detail',['data'=>$data]);
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
    	    
    		return view('Admin.News.detail',['data'=>$data]);
    	}else{
    		echo "<script>alert('已经是最后一篇了');history.go(-1);</script>";
    	}
    	
  	}



    




}