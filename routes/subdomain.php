<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function ($subtitle) {
    return view('welcome', [
        'title' => 'welcome to ' . $subtitle
    ]);
});

Route::get('post/{id}', function ($subdomain, $id) {
        return 'Post ' . $id . ' in second subdomain';
    });
