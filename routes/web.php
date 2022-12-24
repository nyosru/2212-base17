<?php

use App\Http\Controllers\CalculateCarStController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SocWebController;
use Illuminate\Support\Facades\Auth;

// // Auth::routes();

// // Route::get('/', [ CalculateCarStController::class , 'index' ] );
// Route::any('/ss', [CalculateCarStController::class, 'index']);

// Route::any('/vk/enter', [SocWebController::class, 'enter'])->name('vk-enter');
// Route::any('/vk/call-back', [SocWebController::class, 'callBack'])->name('vk-callback');

// // Route::get('/logout', function () {
// //     Auth::logout();
// //     return back();
// // })->name('logout');

// Route::get('logout', function(){
//     Auth::logout();
//     return redirect('/');
// })->name('logout');

Route::get('/', fn () => view('welcome'))->name('home');
// Route::any('/{any}', fn () => view('welcome'))->where('any', '.*');

// // /*
// // |--------------------------------------------------------------------------
// // | Web Routes
// // |--------------------------------------------------------------------------
// // |
// // | Here is where you can register web routes for your application. These
// // | routes are loaded by the RouteServiceProvider within a group which
// // | contains the "web" middleware group. Now create something great!
// // |
// // */

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// // Auth::routes();

// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
