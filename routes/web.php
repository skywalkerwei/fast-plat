<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//通讯录同步
Route::any('wechat/work_notify',"WorkWechatNotify@work");

//坐商宝-API消息接受
Route::any('wechat/work_zsb_notify',"WorkWechatNotify@zsb");

//坐商宝-客户消息接受
Route::any('wechat/work_client_notify',"WorkWechatNotify@client");
