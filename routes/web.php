<?php

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();
