<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home')->name('root_path');

Route::get('/about', 'PagesController@about')->name('about_path');

Route::get('/contact', 'ContactController@create')->name('contact_path');


