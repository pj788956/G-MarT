<?php
use App\Http\Controllers\gmartController;
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
route::get('login','gmartController@show');
route::post('login','gmartController@submit_login');
route::get('dashboard','gmartController@dash');