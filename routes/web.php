<?php

use App\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::group(['prefix' => 'user'], function () {
    Route::get('/buscar', 'UserController@buscarCodigo')->name('user.buscar');
});

