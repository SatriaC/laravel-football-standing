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
Route::get('/test', 'KlasemenController@test')->name('klasemen.test');
Route::post('/test', 'KlasemenController@testStore')->name('klasemen.test-store');



Route::get('/', 'KlasemenController@index')->name('klasemen.index');
Route::post('/', 'KlasemenController@store')->name('klasemen.store');

