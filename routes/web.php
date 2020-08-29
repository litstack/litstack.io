<?php

use Illuminate\Support\Facades\Route;

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', config('docdress.repos.litstack/docs.default_version'));
}

Route::get('/', function () {
    return view('welcome');
});
