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
//新加房屋
Route::get('admin/article_add','Admin\ArticleController@article_add');

//门店管理列表
Route::get('admin/store_list','Admin\StoreController@store_list');
//门店删除
Route::any('admin/store_del','Admin\StoreController@store_del');
//门店新增
Route::any('admin/store_add','Admin\StoreController@store_add');
Route::any('admin/store_adds','Admin\StoreController@store_adds');
//Route::get('admin/store_list','Admin\StoreController@store_list');

//公司管理模块
Route::get('admin/firm_list','Admin\FirmController@firm_list');
//公司信息添加
Route::get('admin/firm_add','Admin\FirmController@firm_add');
Route::any('admin/firm_adds','Admin\FirmController@firm_adds');
Route::any('admin/firm_lists','Admin\FirmController@firm_lists');
Route::any('admin/firm_update','Admin\FirmController@firm_update');
Route::any('admin/firm_updates','Admin\FirmController@firm_updates');

//轮播图管理
Route::get('admin/turn_add','Admin\TurnController@turn_add');
Route::any('admin/turn_adds','Admin\TurnController@turn_adds');
Route::any('admin/turn_list','Admin\TurnController@turn_list');
Route::any('admin/turn_img_first','Admin\TurnController@turn_img_first');
//Route::any('admin/turn_img_end','Admin\TurnController@turn_img_end');
Route::any('admin/turn_img_del','Admin\TurnController@turn_img_del');

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



