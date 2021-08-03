<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');

Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');

Route::get('/captain', [App\Http\Controllers\CaptainController::class, 'index'])->name('captain');

Route::get('/contactus', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus');

Route::get('/contest', [App\Http\Controllers\ContestController::class, 'index'])->name('contest');

Route::get('/create-team', [App\Http\Controllers\CreateTeamController::class, 'index'])->name('create-team');

Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');

Route::get('/how-to-play', [App\Http\Controllers\HowtoPlayController::class, 'index'])->name('how-to-play');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');

Route::get('/select-contest', [App\Http\Controllers\SelectContestController::class, 'index'])->name('select-contest');

Route::get('/wallet', [App\Http\Controllers\WalletController::class, 'index'])->name('wallet');

Route::get('/', function () {
    return view('home');
});
