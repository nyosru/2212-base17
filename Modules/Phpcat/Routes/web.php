<?php

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

use Modules\Phpcat\Http\Controllers\PhpcatController;

Route::get('/', [PhpcatController::class,'index']);

// Route::prefix('phpcat')->group(function() {
//     // dd(333);
//     // Route::get('/', [PhpcatController::class,'index']);
    Route::get('{any?}', [PhpcatController::class,'index']);
// });
