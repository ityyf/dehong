<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
});
//后台登陆页
Route::get('admin/login','Admin\LoginController@login');
//后台首页
Route::get('admin/index','Admin\IndexController@index');
//中心部分
Route::get('admin/main','Admin\IndexController@main');
//房屋分类列表
Route::get('admin/classify_list','Admin\ClassifyController@classify_list');
//房屋列表
Route::get('admin/article_list','Admin\ArticleController@article_list');
Route::get('admin/article_add','Admin\ArticleController@article_add');

//新加房屋

//------新闻中心-----
//新闻列表
Route::get('admin/news_list','Admin\NewsController@news_list');
//新闻添加
Route::get('admin/news_add','Admin\NewsController@news_add');
//接值
Route::any('admin/news_data','Admin\NewsController@news_data');
//新闻详情页
Route::any('admin/detail/{n_id?}','Admin\NewsController@detail');
//删除
Route::any('admin/news_delete/{n_id?}','Admin\NewsController@news_delete');
//编辑
Route::any('admin/news_edit/{n_id?}','Admin\NewsController@news_edit');
//编辑执行
Route::any('admin/news_update/{n_id?}','Admin\NewsController@news_update');
// 上一篇
Route::any('admin/getPrevArticleId/{n_id?}','Admin\NewsController@getPrevArticleId');
// 下一篇
Route::any('admin/getNextArticleId/{n_id?}','Admin\NewsController@getNextArticleId');
//---------rbac----------
//角色添加
Route::any('admin/role_add','Admin\RbacController@role_add');
//角色列表
Route::any('admin/role_list','Admin\RbacController@role_list');
//角色添加执行
Route::any('admin/role_data','Admin\RbacController@role_data');
// 角色删除
Route::any('admin/role_delete/{r_id?}','Admin\RbacController@role_delete');
//角色编辑
Route::any('admin/role_editor/{r_id?}','Admin\RbacController@role_editor');
//角色编辑执行
Route::any('admin/role_update/{r_id?}','Admin\RbacController@role_update');




//Route::any('/login','admin/LoginController@login');
Route::any('/check_login','admin/LoginController@check_login');
//跳转到首页
Route::any('home/index','Home\IndexController@index');
Route::any('home/about','Home\AboutController@about');
Route::any('home/contact','Home\ContactController@contact');
Route::any('home/news','Home\NewsController@news');
Route::any('home/icons','Home\IconsController@icons');
Route::any('home/summary','Home\SummaryController@summary');
Route::any('home/codes','Home\IconsController@codes');



?>



