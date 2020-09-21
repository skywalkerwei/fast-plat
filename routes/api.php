<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//无须验证身份
Route::group([
    'middleware'    => ['api.access'],
], function (Router $api) {

    $api->get('test001',function (){
        echo  "api - test";
    });

});


//需要登陆-用户
Route::group([
    'middleware'    => ['api.access', 'jwt.role:user', 'api.jwt'],
], function (Router $api) {


});


//需要登陆-总后台 身份
Route::group([
    'middleware'    => ['api.access', 'assign.guard:admin','api.jwt','jwt.role:admin'],
], function (Router $api) {


});

//需要登陆 - 商户身份
Route::group([
    'middleware'    => ['api.access', 'assign.guard:merchant','api.jwt','jwt.role:merchant'],
], function (Router $api) {

});
