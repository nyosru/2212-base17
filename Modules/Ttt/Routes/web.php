<?php

// use Modules\Phpcat\Http\Controllers\PhpcatController;
use Modules\Ttt\Http\Controllers\TttController;

$appRoutes = function() {
    Route::get('/', [TttController::class,'index']);
    Route::get('{any?}', [TttController::class,'index']);
};

// Route::group(array('domain' => 'php-cat.com'), $appRoutes);
// ттт72.рф
Route::group(array('domain' => 'xn--72-qmcaa.xn--p1ai'), $appRoutes);
Route::group(array('domain' => 'ttt.17.ru'), $appRoutes);
// Route::group(array('domain' => 'phpcat.base17.php-cat.com'), $appRoutes);

// Route::prefix('ttt')->group(function() {
//     Route::get('/', 'TttController@index');
// });
