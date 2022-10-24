<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function ($subtitle) {
    return view('welcome', [
        'title' => 'welcome to ' . $subtitle
    ]);
});