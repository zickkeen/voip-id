<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', 'HomeController@showHome');

Route::get('init', 'InitController@doInit');

Route::get('dashboard', array('before' => 'auth', 'uses' => 'DashboardController@showDashboard'));

Route::get('user/login', 'UserController@showLogin');
Route::post('user/login', 'UserController@doLogin');

Route::get('user/register', 'UserController@showRegister');
Route::post('user/register', 'UserController@doRegister');

Route::controller('password', 'PasswordController');

Route::get('user/logout', 'UserController@doLogout');
