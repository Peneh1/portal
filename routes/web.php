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

Route::get('portalpix.com/', function () {
    return view('home', [
		'title' => 'Home'
			   ]);
});

Route::get('/sign-up', function () {
    return view('sign-up', [
		'title' => 'Sign Up'
			   ]);
});


Route::get('/log-in', function () {
    return view('log-in', [
		'title' => 'Log in'
			   ]);
});

Route::get('/article-details', function () {
    return view('article-details', [
		'title' => 'Article Details'
			   ]);
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions', [
		'title' => 'Terms Conditions'
			   ]);
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy', [
		'title' => 'Privacy Policy'
			   ]);
});

# APP

Route::get('{subdomain}.portalpix.com/', function ($subdomain) {
    return view('welcome', [
		'title' => 'Welcome to ' . $subdomain,
			   ]);
});

