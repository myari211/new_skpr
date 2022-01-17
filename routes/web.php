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

Route::get('/', 'Guest\GuestController@index')->name('home');
Route::get('/services', 'Guest\GuestController@service')->name('services');
Route::get('/work', 'Guest\GuestController@work')->name('our_work');
Route::get('/work/{id}', 'Guest\GuestController@work_details')->name('work_details');
Route::get('/self_assesment', 'Guest\GuestController@self_assesment')->name('self_assesment');
Route::get('/request_proposal', 'Guest\GuestController@proposal')->name('proposal');
Route::get('/assesment', 'Guest\GuestController@self_assesment_request')->name('request_assesment');
Route::post('/assesment', 'Guest\GuestController@self_assesment_post')->name('post_assesment');
Route::get('/assesment/result/{id}', 'Guest\GuestController@result')->name('result');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
