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


//订单列表
Route::get('admin/order_list','Admin\OrderController@order_list');


//Route::any('/login','admin/LoginController@login');
Route::any('/check_login','admin/LoginController@check_login');
//跳转到首页
Route::any('home/index','Home\IndexController@index');
Route::any('home/AboutController','Home\AboutController@about');
Route::any('home/contact','Home\ContactController@contact');
Route::any('home/news','Home\NewsController@news');
Route::any('home/icons','Home\IconsController@icons');
Route::any('home/summary','Home\SummaryController@summary');
Route::any('home/codes','Home\IconsController@codes');



?>


