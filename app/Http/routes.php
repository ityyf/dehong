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
Route::get('admin/order_del','Admin\OrderController@order_del');
Route::get('admin/order_dels','Admin\OrderController@order_dels');
Route::get('admin/order_detail','Admin\OrderController@order_detail');

//产品
Route::any('admin/product_add','Admin\ProductController@product_add');
Route::any('admin/product_add_exec','Admin\ProductController@product_add_exec');
Route::any('admin/product_list','Admin\ProductController@product_list');
Route::any('admin/product_dels','Admin\ProductController@product_dels');
Route::any('admin/product_edit','Admin\ProductController@product_edit');
Route::any('admin/product_save','Admin\ProductController@product_save');
Route::any('admin/product_save_exec','Admin\ProductController@product_save_exec');
Route::any('admin/product_del','Admin\ProductController@product_del');

//回收站
Route::any('admin/recover','Admin\ProductController@recover');
Route::any('admin/restore','Admin\ProductController@restore');
Route::any('admin/destory','Admin\ProductController@destory');

//分类
Route::any('admin/category_list','Admin\CategoryController@category_list');
Route::any('admin/category_add','Admin\CategoryController@category_add');
Route::any('admin/category_add_exec','Admin\CategoryController@category_add_exec');
Route::any('admin/category_del','Admin\CategoryController@category_del');
Route::any('admin/category_edit','Admin\CategoryController@category_edit');
Route::any('admin/category_edit_exec','Admin\CategoryController@category_edit_exec');





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



