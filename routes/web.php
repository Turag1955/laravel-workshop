<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Cache::store('redis')->put('framework', 'Laravel 12', 10);
    // return Cache::store('redis')->get('framework');
    return view('welcome');
});
