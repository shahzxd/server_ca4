<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Show login form
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

// Handle login request
Route::post('/login', 'Auth\LoginController@login');

// Show registration form
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

// Handle registration request
Route::post('/register', 'Auth\RegisterController@register');
