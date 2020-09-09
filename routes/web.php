<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', config('docdress.repos.litstack/docs.default_version'));
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('login/github', [LoginController::class, 'redirectToGithubProvider']);
Route::get('login/github/callback', [LoginController::class, 'handleGithubProviderCallback']);
