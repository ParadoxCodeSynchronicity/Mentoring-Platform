<?php

use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

Route::get('/register', 'UserController@showRegisterForm');
Route::post('/api/register', 'UserController@addNewUser');

Route::get('/login', 'UserController@showLoginForm');
Route::post('/api/login', 'UserController@doLogin');

Route::get('/profile', 'ProfileController@showProfilePage')->name('profile');

Route::get('/api/user', 'UserController@getUser');

Route::get('/myProfile', function(){
    return view('myProfile');
});

Route::post('uploadAvatar', 'UserController@uploadAvatar');



