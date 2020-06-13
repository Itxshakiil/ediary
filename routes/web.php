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


Route::view('/', 'welcome');

Auth::routes(['verify' => true]);

Route::get('/password/change', 'Auth\ChangePasswordController@showForm');
Route::post('/password/change', 'Auth\ChangePasswordController@change')->name('password.change');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::post('/contact', 'PageController@send')->name('contact.send');
Route::post('/checkusername', 'HomeController@checkusername')->name('checkusername');

Route::get('/user/{user:username}','ProfileController@show');
Route::post('/profile/{user:username}','ProfileController@update');

Route::view('/about', 'pages.about');
Route::view('/faq', 'pages.faq');
Route::view('/contact', 'pages.contact');
Route::view('/success', 'pages.success');
Route::view('/request-data', 'pages.request-data');

Route::middleware(['auth'])->group(function () {
    Route::get('/diaries', 'DiaryController@index');
    Route::get('/diaries/create', 'DiaryController@create')->name('diary.create');
    Route::post('/diaries', 'DiaryController@store')->name('diary.store');
});
