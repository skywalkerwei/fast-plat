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
//    $api->get('t1', 'Tests@tt');

    $api->post('login','Tests@tt');



});

//需要登陆-用户
Route::group([
    'middleware'    => ['api.access','jwt.role:user','api.jwt'],
], function (Router $api) {

//    $api->get('me', 'Auth@profile');    // 登录信息
//    $api->get('logout', 'Auth@logout'); //

});

