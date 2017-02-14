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
Route::any('admin/login','Admin\LoginController@login');
//退出登陆
Route::any('admin/login_out','Admin\LoginController@login_out');
//后台首页
Route::any('admin/index','Admin\IndexController@index');
//中心部分
Route::get('admin/main','Admin\IndexController@main');
//房屋分类列表
Route::get('admin/classify_list','Admin\ClassifyController@classify_list');
//房屋列表
Route::get('admin/article_list','Admin\ArticleController@article_list');
Route::get('admin/article_add','Admin\ArticleController@article_add');
/**
 * 管理员管理 路由
 */
//管理员添加路由
Route::any('admin/admin_add','Admin\AdminController@admin_add');
//管理员列表路由
Route::any('admin/admin_list','Admin\AdminController@admin_list');
//管理员详细信息查询
Route::any('admin/admin_information','Admin\AdminController@admin_information');
//编辑个人信息
Route::any('admin/admin_update','Admin\AdminController@admin_update');
Route::any('admin/admin_handle','Admin\AdminController@admin_handle');
//管理员删除
Route::any('admin/admin_del','Admin\AdminController@admin_del');
/***
 * 权限管理 路由
 */
//权限添加
Route::any('admin/power_add','Admin\PowerController@power_add');
//权限列表
Route::any('admin/power_list','Admin\PowerController@power_list');
//编辑权限
Route::any('admin/power_update','Admin\PowerController@power_update');
Route::any('admin/power_save','Admin\PowerController@power_save');
//删除权限
Route::any('admin/power_del','Admin\PowerController@power_del');







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



