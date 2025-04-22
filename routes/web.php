<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Homepage';
    return view('welcome', ['title' => $title]);
});
