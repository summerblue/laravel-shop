<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

// 在之前的路由里加上一个 verify 参数
Auth::routes(['verify' => true]);
