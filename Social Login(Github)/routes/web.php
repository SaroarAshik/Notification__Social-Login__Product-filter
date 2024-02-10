<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/facebook',[SocialController::class,'facebookRedirect']);
Route::get('login/facebook/callback',[SocialController::class,'loginWithFacebook']);


Route::get('login/github',[SocialController::class,'githubRedirect']);
Route::get('login/github/callback',[SocialController::class,'loginWithGithub']);