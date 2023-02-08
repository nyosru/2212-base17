<?php

use Modules\Ssb\Http\Controllers\SsbController;

$appRoutes1 = function() {
    // Route::get('/', [ZemkController::class,'index']);
    Route::get('{any?}/{any2?}/{any3?}/', [SsbController::class,'index']);
};

// Route::group(array('domain' => 'php-cat.com'), $appRoutes);
// ттт72.рф
// Route::group(array('domain' => 'xn--72-qmcaa.xn--p1ai'), $appRoutes);
// земельныйкадастр.рф

// Route::group(array('domain' => 'xn--80aalcakqihin5bmo2koa.xn--p1ai'), $appRoutes1);
Route::group(array('domain' => 'ssb.dev.ru'), $appRoutes1);



// Route::prefix('ssb')->group(function() {
//     Route::get('/', 'SsbController@index');
// });
