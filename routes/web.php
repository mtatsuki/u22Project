<?php

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

Route::get(
    '/', function () {
        return view('top');
    }
);

Route::get(
    '/post', function () {
        return view('post');
    }
);


Route::get(
    '/show', function () {
        return view('show');
    }
);


Route::get(
    '/add', function () {
        return view('add');
    }
);
