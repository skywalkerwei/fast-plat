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

//无须验证身份- 回调接口都无须验证身份
Route::group([
    'middleware'    => [],
], function (Router $api) {

//    $api->any('test',function (){
//        echo "回调test";
//    });

    $api->any('ali','Ali@tt');
    $api->any('wx','Wx@tt');


});
