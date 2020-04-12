<?php

use Illuminate\Support\Facades\Route;

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


// home -> main page
Route::get('/', function () {
    return view('welcome');
});


// About route 
Route::get('/about',function(){
	return view('about');
});

// Login route
Route::get('login', function(){
	return view('login');
});

// user route
Route::get('users/{id}/comments/:{comment}', function($id, $comment){
	return $comment;
});

Route::redirect('/about', '/login', 301);

