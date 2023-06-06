<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;


Route::group(['namespace'=>'App\Http\Controllers\Main'], function()
{
    Route::get('/', IndexController::class);
});

Route::group(['namespace' => 'Admin','prefix' => 'admin'], function()
{

    Route::group(['namespace'=>'Admin\Main'], function()
    {
        Route::get('/', [AdminController::class, '__invoke']);
    });

});

Auth::routes();
