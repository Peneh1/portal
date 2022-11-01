<?php

use App\Models\companys;
use App\Models\projects;
use Illuminate\Support\Facades\Route;

Route::get('/', function ($subdomain) {
    if ($company = companys::exist($subdomain)):
        return view('sub/app', [
            'company' => $company,
            'projects' => projects::all(),
        ]);
    else:
        abort('503');
    endif;
});

Route::get('p/{project}', function ($subdomain, projects $project) {
    return view('sub/single_project',[
        'project' => $project
    ]);
});
