<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return "Hello from Admin Role.";
});

Route::prefix('admin')->group(function () {
    Route::get('prefix', function () {
        return "Hello from Admin home by usining prefix()";
    });
});
