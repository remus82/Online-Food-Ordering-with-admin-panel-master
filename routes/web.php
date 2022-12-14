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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group([

        'middleware' => 'auth.role',
        'prefix' => 'admin',
        'role' => 'admin',
        ],function(){
                Route::get('/home', 'HomeController@index')->name('home');
            
                 Route::get('/product', 'ProductController@index');
        }

);

Route::group([

        'middleware' => 'auth.role',
        'role' => 'user',
        ],function(){
                Route::get('/home', 'HomeController@index')->name('home');
            
        }

);


Route::get('/demo', function () {
    return view('demo');
 });
 




 