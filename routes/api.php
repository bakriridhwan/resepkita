<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getApiReseps', 'ResepsController@getApiReseps');
Route::post('getApiReseps', 'ResepsController@storeApiReseps');
Route::get('detailApiReseps', 'ResepsController@detailApiReseps');

Route::put('updateApiReseps', 'ResepsController@updateApiReseps');
Route::delete('deleteApiReseps', 'ResepsController@destroyApiReseps');
