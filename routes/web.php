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

Route::get('/', 'MasterController@showHome');

Route::get('/producten', 'MasterController@showProducts');
Route::get('/over-ons', 'MasterController@showAboutUs');
Route::get('/faq', 'MasterController@showFaq');
Route::get('/login', 'MasterController@showLogin');
Route::get('/register', 'MasterController@showRegister');
Route::get('/profile', 'MasterController@showProfile');
Route::get('/changeprofile', 'MasterController@showChangeprofile');
Route::get('/changesubscription', 'MasterController@showChangesubscription');
Route::get('/changelogin', 'MasterController@showChangelogin');
Route::get('/betaalgegevens', 'MasterController@showBetaalgegevens');
Route::get('/gekozen-lurebox', 'MasterController@showGekozenlurebox');