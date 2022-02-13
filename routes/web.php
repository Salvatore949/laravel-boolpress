<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home') -> name('home');

Route::get('/post/create', 'HomeController@create') -> name('post.create');

Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::post('/register', 'Auth\RegisterController@register') -> name('register');


