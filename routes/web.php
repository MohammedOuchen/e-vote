<?php

use App\Http\Controllers\Admin\CondidateController;
use App\Http\Controllers\Admin\ElectionController;
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


//after login
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('/admin', UserController::class)->only('index');
    Route::resource('/admin-vote', VoterController::class)->only('index', 'store');
    Route::resource('/admin-condidate', CondidateController::class)->only('index','store');
    Route::post('/admin-condidate-status', [CondidateController::class, 'setStatus'])->name('admin-condidate.status');
    Route::post('/admin-voter-status', [VoterController::class, 'setStatus'])->name('admin-voter.status');
    Route::resource('/admin-election', ElectionController::class)->only('index', 'create', 'store');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
