<?php

namespace App\Http\Controllers\Admin;
//字符编码
header("content-type:text/html;charset=utf-8");

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use DB;
use Symfony\Component\HttpFoundation\Session\Session;
class ArticleController extends CommonController
{
    //跳转到文章列表
    public function article_list(){
        return view('admin/Article.article_list');
    }
    //跳转到文章添加页面
    public function article_add(){
        return view('admin/Article.article_add');
    }
    //跳转到动漫
public function dm(){
    return view('admin/Article.index');
}
}