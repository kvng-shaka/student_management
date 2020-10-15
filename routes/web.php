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
/* web for all pages controller*/
Route::get('/signin','pagescontroller@signin');
Route::get('/signup','pagescontroller@signup');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*web for admin*/

Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
    Route::get('/studentform','StudentController@index');
Route::post('/studentadd','StudentController@store');
});

Route::resource('enquiry', 'EnquiryController');

