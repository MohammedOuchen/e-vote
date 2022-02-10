<?php

use App\Http\Controllers\Admin\CondidateController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VoterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages/home');
});






Route::get('/loginn', function () {
    return view('loginn');
});

Route::get('/registerr', function () {
    return view('pages/registerr');
});

//after login
// Route::group(['middleware' => ['auth', 'role:admin'],], function () {

    Route::resource('/admin', UserController::class)->only('index');
    Route::resource('/admin-vote', VoterController::class)->only('index');
    Route::resource('/admin-condidate', CondidateController::class)->only('index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
