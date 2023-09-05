<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\admin\AdminController;

Route::prefix('admin')->name("admin.")->group(function(){

    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login', 'admin.pages.admin.auth.login')->name('login');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home', 'admin.pages.admin.home')->name('home');
    });
});
