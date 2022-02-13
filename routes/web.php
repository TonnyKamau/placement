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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\UserExploitController@home')->name('dashboard')->middleware('accessrole');

Route::get('/', 'App\Http\Controllers\UserExploitController@index');
Route::get('/studentportal', 'App\Http\Controllers\UserExploitController@home');
Route::get('/logout', 'App\Http\Controllers\UserExploitController@logout');
Route::POST('/selection', 'App\Http\Controllers\UserExploitController@storeSelection')->name('sendSelection');
Route::POST('/', 'App\Http\Controllers\UserExploitController@sms')->name('sendMessage');

Route::middleware(['admin'])->group(
    function () {
Route::get('/admin', "App\Http\Controllers\AdminController@show");
Route::get('/setting', 'App\Http\Controllers\AdminController@settings');
Route::get('/userregistration', 'App\Http\Controllers\AdminController@create');
Route::post('/userregistration', 'App\Http\Controllers\AdminController@store')->name('userregister');
Route::get('/CreatePrimary', 'App\Http\Controllers\PrimaryController@create');
Route::post('/CreatePrimary', 'App\Http\Controllers\PrimaryController@store');
Route::get('/UpdatePrimary', 'App\Http\Controllers\PrimaryController@edit');
Route::get('/RemovePrimary', 'App\Http\Controllers\PrimaryController@destroy');
Route::get('/CreateHighschool', 'App\Http\Controllers\SecondaryController@create');
Route::post('/CreateHighschool', 'App\Http\Controllers\SecondaryController@store');
Route::get('/UpdateHighschool', 'App\Http\Controllers\SecondaryController@edit');
Route::get('/RemoveHighschool', 'App\Http\Controllers\SecondaryController@destroy');
Route::post('/MarksRecord', 'App\Http\Controllers\MarksController@store');
Route::get('/MarksRecord', 'App\Http\Controllers\MarksController@create');
 });

Route::middleware(['headteacher'])->group(
    function () {
Route::get('/headteacher', 'App\Http\Controllers\HeadteacherController@index');
Route::get('/studentregister', 'App\Http\Controllers\HeadteacherController@create');
Route::post('/studentregister', 'App\Http\Controllers\HeadteacherController@store')->name('studentregister');
Route::get('/settings', 'App\Http\Controllers\HeadteacherController@settings');
 });

Route::middleware(['student'])->group(
    function () {
Route::post('/schoolselection', 'App\Http\Controllers\SchoolselectionController@store');
    });
