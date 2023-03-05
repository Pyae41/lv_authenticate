<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers'],function () {
    Route::get('/','HomeController@index')->name('home.index');

    // Route::group(['middleware' => ['guest']],function(){

    //     // register route
    //     Route::get('/register','RegisterController@show')->name('register.show');

    //     Route::post('/register','RegisterController@register')->name('register.registration');
    // });


    Route::get('/register','RegisterController@show')->name('register.show');

    Route::post('/register','RegisterController@register')->name('register.registration');

    // login
    Route::get('/login','LoginController@show')->name('login.show');
    Route::post('/login','LoginController@perform')->name('login.perform');

    // logout
    Route::post('/logout','LogoutController@perform')->name('logout');


    // product
    Route::resource('/product', ProductController::class);

});
