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

// Route::prefix('zemk')->group(function() {
//     Route::get('/', 'ZemkController@index');
// });

use Modules\Zemk\Http\Controllers\ZemkController;

$appRoutes1 = function() {
    Route::get('/', [ZemkController::class,'index']);
    Route::get('{any?}', [ZemkController::class,'index']);
};

// Route::group(array('domain' => 'php-cat.com'), $appRoutes);
// ттт72.рф
// Route::group(array('domain' => 'xn--72-qmcaa.xn--p1ai'), $appRoutes);
// земельныйкадастр.рф
Route::group(array('domain' => 'xn--80aalcakqihin5bmo2koa.xn--p1ai'), $appRoutes1);
Route::group(array('domain' => 'zem.17.ru'), $appRoutes1);