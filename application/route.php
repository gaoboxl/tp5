<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

Route::get('/','index/index/index');

//欢迎页
Route::get('admin/index/index','admin/index/index');
Route::get('admin/index/welcome','admin/index/welcome');

//公共
Route::get('index/sms/sendSms','index/sms/sendSms');
Route::get('index/index/qrcode','index/index/qrcode');
Route::post('admin/image/image','admin/image/image');
Route::post('admin/image/images','admin/image/images');
Route::get('index/pay/index','index/pay/index');
Route::post('index/pay/pay','index/pay/pay');

//登录
Route::get('admin/login/index','admin/login/index');
Route::post('admin/login/login','admin/login/login');
Route::get('admin/login/logout','admin/login/logout');

//管理员
Route::get('admin/admin/index','admin/admin/index');
Route::get('admin/admin/create','admin/admin/create');
Route::post('admin/admin/save','admin/admin/save');
Route::get('admin/admin/edit/:id','admin/admin/edit');
Route::post('admin/admin/update','admin/admin/update');
Route::get('admin/admin/delete/:id','admin/admin/delete');
Route::get('admin/admin/status','admin/admin/status');

//权限
Route::get('admin/rule/index','admin/rule/index');
Route::get('admin/rule/create','admin/rule/create');
Route::post('admin/rule/save','admin/rule/save');
Route::get('admin/rule/edit/:id','admin/rule/edit');
Route::post('admin/rule/update','admin/rule/update');
Route::get('admin/rule/delete/:id','admin/rule/delete');
Route::get('admin/rule/status','admin/rule/status');

//管理组
Route::get('admin/role/index','admin/role/index');
Route::get('admin/role/create','admin/role/create');
Route::post('admin/role/save','admin/role/save');
Route::get('admin/role/edit/:id','admin/role/edit');
Route::post('admin/role/update','admin/role/update');
Route::get('admin/role/delete/:id','admin/role/delete');
Route::get('admin/role/status','admin/role/status');

//菜单管理
Route::get('admin/menu/index','admin/menu/index');
Route::get('admin/menu/create','admin/menu/create');
Route::post('admin/menu/save','admin/menu/save');
Route::get('admin/menu/edit/:id','admin/menu/edit');
Route::post('admin/menu/update','admin/menu/update');
Route::get('admin/menu/delete/:id','admin/menu/delete');
Route::get('admin/menu/status','admin/menu/status');

//文章管理
Route::get('admin/article/index','admin/article/index');
Route::get('admin/article/create','admin/article/create');
Route::post('admin/article/save','admin/article/save');
Route::get('admin/article/edit/:id','admin/article/edit');
Route::post('admin/article/update','admin/article/update');
Route::get('admin/article/delete/:id','admin/article/delete');
Route::get('admin/article/status','admin/article/status');

//文章分类
Route::get('admin/category/index','admin/category/index');
Route::get('admin/category/create','admin/category/create');
Route::post('admin/category/save','admin/category/save');
Route::get('admin/category/edit/:id','admin/category/edit');
Route::post('admin/category/update','admin/category/update');
Route::get('admin/category/delete/:id','admin/category/delete');
Route::get('admin/category/status','admin/category/status');

//系统配置
Route::get('admin/system/index','admin/system/index');
Route::get('admin/system/create','admin/system/create');
Route::post('admin/system/save','admin/system/save');
Route::get('admin/system/edit/:id','admin/system/edit');
Route::post('admin/system/update','admin/system/update');
Route::get('admin/system/delete:id','admin/system/delete');
Route::get('admin/system/status','admin/system/status');

//支付文件
Route::get('admin/pay/index','admin/pay/index');
Route::get('admin/pay/create','admin/pay/create');
Route::post('admin/pay/save','admin/pay/save');
Route::get('admin/pay/edit/:id','admin/pay/edit');
Route::post('admin/pay/update','admin/pay/update');
Route::get('admin/pay/delete:id','admin/pay/delete');
Route::get('admin/pay/status','admin/pay/status');

//广告
Route::get('admin/advs/index','admin/advs/index');
Route::get('admin/advs/create','admin/advs/create');
Route::post('admin/advs/save','admin/advs/save');
Route::get('admin/advs/edit/:id','admin/advs/edit');
Route::post('admin/advs/update','admin/advs/update');
Route::get('admin/advs/delete/:id','admin/advs/delete');
Route::get('admin/advs/status','admin/advs/sataus');

//广告位置
Route::get('admin/position/index','admin/position/index');
Route::get('admin/position/create','admin/position/create');
Route::post('admin/position/save','admin/position/save');
Route::get('admin/position/edit/:id','admin/position/edit');
Route::post('admin/position/update','admin/position/update');
Route::get('admin/position/delete/:id','admin/position/delete');
Route::get('admin/position/status','admin/position/status');



return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
