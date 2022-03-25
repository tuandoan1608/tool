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

route::get('/','home@index');
route::get('/home','home@home');
route::post('/add','home@add');

Route::get('/account', 'ImportExportController@account');
Route::get('/sosical', 'ImportExportController@sosical');
Route::get('/username', 'ImportExportController@username');
Route::get('/wallet', 'ImportExportController@wallet');

Route::post('/ipacc', 'ImportExportController@importacc');
Route::post('/ipsosical', 'ImportExportController@importsc');
Route::post('/ipusername', 'ImportExportController@importun');
Route::post('/ipwallet', 'ImportExportController@importwl');