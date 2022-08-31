<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route parameters
// (Required)
Route::get('/route/{para}', function ($para) {
    return "Route with A Required Parameter";
});

// (optional) with (name)
Route::get('/route-optional/{para?}', function () {
    return "Route with An Optional Parameter";
})->name('routeOp');
