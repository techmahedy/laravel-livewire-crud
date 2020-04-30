<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

  return view('welcome');

});

Route::view('contacts', 'users.contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
