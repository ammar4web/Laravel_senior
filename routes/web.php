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

    //
    // We can pass data from 'the route', but just in special situations and not in general, so don't do that, please.
    // We pass data from 'the controller',
    //

    // one parameter
    // ->with('data', "My data From Route");
    // return view('welcome')->with('data', "My data From Route");

    // two parameters
    // ->with(['data1' => "My data1 From Route", 'data2' => "My data2 From Route"]);
    // return view('welcome')->with(['data1' => "My data1 From Route", 'data2' => "My data2 From Route"]);

    //associative array
    $data = [
        "data1" => "My data1 From Route",
        "data2" => "My data2 From Route",
        "data3" => "My data3 From Route",
    ];
    // without with()
    return view('welcome', $data);
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
