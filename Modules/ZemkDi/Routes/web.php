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

// Route::prefix('zemkdi')->group(function() {
//     Route::get('/', 'ZemkDiController@index');
// });

use Modules\ZemkDi\Http\Controllers\DiController;
use Modules\ZemkDi\Http\Controllers\SocWebController;

use Illuminate\Support\Facades\Auth;

$appRoutes1 = function () {
    // Route::get('/', [ZemkController::class,'index']);

    Route::any('/vk/enter', [SocWebController::class, 'enter'])->name('zemk-vk-enter');
    Route::any('/vk/call-back', [SocWebController::class, 'callBack'])->name('zemk-vk-callback');

    // Route::get('/', [DiController::class, 'index2'])->middleware('auth');




    // Route::get('/logout', function () {
    //     Auth::logout();
    //     return back();
    // })->name('logout');


    // Route::get('/', [DiController::class, 'index'])->name('enter_lk');

    Route::get('/', [DiController::class, 'index'])->name('zemk-index');
    // Route::get('/', [DiController::class, 'index'])->name('login');
    // Route::get('/', [DiController::class, 'index'])->name('login');
    // Route::get('{any?}/{any2?}/{any3?}/', [ZemkController::class,'index']);


    Route::middleware('auth')->group(function () {
        Route::get('/page/{pageName}', [DiController::class, 'pageEditor'])->name('zemk-page');
    });

    Route::get('/service/images', [DiController::class, 'images'])->name('zemk-di-images');

    Route::get('zemk/logout2', function (Request $request) {
        // Auth::logout();
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('/');
    })->name('zemk-logout2');

};

// Route::group(array('domain' => 'php-cat.com'), $appRoutes);
// ттт72.рф
// Route::group(array('domain' => 'xn--72-qmcaa.xn--p1ai'), $appRoutes);
// земельныйкадастр.рф

// Route::group(array('domain' => 'xn--80aalcakqihin5bmo2koa.xn--p1ai'), $appRoutes1);
Route::group(array('domain' => 'zemkdi.17.ru'), $appRoutes1);
Route::group(array('domain' => 'zk.di.php-cat.com'), $appRoutes1);
