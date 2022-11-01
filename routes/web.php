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

Route::get('/', function () {
    return view('main/home', [
		'title' => 'Home'
			   ]);
});

Route::get('/sign-up', function () {
    return view('main/sign-up', [
		'title' => 'Sign Up'
			   ]);
});


Route::get('/log-in', function () {
    return view('main/log-in', [
		'title' => 'Log in'
			   ]);
});

Route::get('/article-details', function () {
    return view('main/article-details', [
		'title' => 'Article Details'
			   ]);
});

Route::get('/terms-conditions', function () {
    return view('main/terms-conditions', [
		'title' => 'Terms Conditions'
			   ]);
});

Route::get('/privacy-policy', function () {
    return view('main/privacy-policy', [
		'title' => 'Privacy Policy'
			   ]);
});

