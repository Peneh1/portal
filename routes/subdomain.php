<?php

use App\Models\projects;
use Illuminate\Support\Facades\Route;

Route::get('/', function ($subdomain) {
    return view('app', [
        'projects' => projects::all(),
    ]);
});

Route::get('post/{id}', function ($subdomain, $id) {
        return 'Post ' . $id . ' in second subdomain';
    });
