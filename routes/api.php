<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {

    Route::post('login', 'ApiController@login'); #TEST Done
    Route::post('register', 'ApiController@register'); #TEST Done

    ############################################################
    #####################  Start Middleware ####################
    ############################################################
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('products', 'ApiController@products'); #TEST Done
        Route::post('order', 'ApiController@add_order'); #TEST Done
        Route::get('order', 'ApiController@get_order'); #TEST Done
        Route::get('offers', 'ApiController@offers'); #TEST Done

    });
    ############################################################
    #####################  End Middleware   ####################
    ############################################################
});
