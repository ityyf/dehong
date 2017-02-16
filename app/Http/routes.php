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
Route::any('admin/power_role','Admin\RbacController@power_role');
//角色赋予权限
Route::any('admin/empowerment','Admin\RbacController@empowerment');
//用户赋予角色
Route::any('admin/admin_role','Admin\RbacController@admin_role');
Route::any('admin/endow_role','Admin\RbacController@endow_role');


//门店管理列表
Route::get('admin/store_list','Admin\StoreController@store_list');
//门店删除
Route::any('admin/store_del','Admin\StoreController@store_del');
//门店新增
Route::any('admin/store_add','Admin\StoreController@store_add');
Route::any('admin/store_adds','Admin\StoreController@store_adds');
//Route::get('admin/store_list','Admin\StoreController@store_list');
//日志管理
//日志列表
Route::any('admin/log_list','Admin\LogController@log_list');
//日志批量删除
Route::any('admin/deletemore','Admin\LogController@deletemore');

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

//留言
Route::any('admin/message_list','Admin\MessageController@message_list');




//Route::any('/login','admin/LoginController@login');
/*Route::any('/check_login','admin/LoginController@check_login');*/
//跳转到首页
Route::any('home/index','Home\IndexController@index');
Route::any('home/AboutController','Home\AboutController@about');
Route::any('home/contact','Home\ContactController@contact');
Route::any('home/news','Home\NewsController@news');
Route::any('home/icons','Home\IconsController@icons');
Route::any('home/summary','Home\SummaryController@summary');
Route::any('home/codes','Home\IconsController@codes');


//联系页留言添加
Route::any('home/message_add','Home\ContactController@message_add');
Route::any('home/message_aa','Home\ContactController@contact_aa');


?>



