<?php

use App\Http\Controllers\Test\NewsController;
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

Route::middleware('auth')->group(function () {
    Route::get('middleware', function () {
        return "Hello by Route usining middleware with group";
    });
});

Route::get('middleware-just', function () {
    return "Hello by Route usining middleware without group";
})->middleware('auth');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('group', function () {
        return "Hello from Admin home by usining group()";
    });
});

Route::get("/admin/home", [App\Http\Controllers\Admin\AdminHomeController::class, "home"]);
Route::get("/admin/exception", [App\Http\Controllers\Admin\AdminHomeController::class, "exception"]);

Route::resource("news", NewsController::class);
