<?php

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
})->name('homee');

Route::get('/loginn', function () {
    return view('loginn');
})->name('loginn');

Route::get('/candidatList', function () {
    return view('pages/Voters/candidatList');
})->name('candidatList');

Route::get('/registerr', function () {
    return view('pages/registerr');
})->name('registerr');

Route::get('/vote', function () {
    return view('pages/Voters/vote');
})->name('vote');

Route::get('/resultat', function () {
    return view('resultat');
})->name('resultat');

Route::get('/dashboardU', function () {
    return view('dashboardU');
})->name('dashboardU');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');