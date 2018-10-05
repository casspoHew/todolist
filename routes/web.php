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

Route::get('/', function () {
    return view('home');
    // return "Hi, there";
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/register/submit', 'registerController@submit');
Auth::routes();

Route::post('/create/submit', 'createController@submit');
Auth::routes();

Route::get('/create/submit', 'createController@update');
Auth::routes();

// Route::post('/create/submit', 'createController@delete');
// Auth::routes();

Route::get('/task', 'createController@getTask');

Route::get('update/{taskid?}', 'createController@edit');

// Route::get('/update/{taskid}', 'createController@update');
// Route::get('update/{taskid?}', function ($name = null) {
//     return $name;
// });

// Route::get('/update', function(){
// 	return view('update');
// });

Route::get('/dashboard', 'DashboardController@index');

Route::get('chart','chartController@index');

