<?php

use Modules\Ssb\Http\Controllers\SsbController;

$appRoutes1 = function() {
    // Route::get('/', [ZemkController::class,'index']);
    Route::get('{any?}/{any2?}/{any3?}/', [SsbController::class,'index']);
};

Route::group(array('domain' => 'ssb.dev.ru'), $appRoutes1);
// сергейсб.рф
Route::group(array('domain' => 'xn--90adfbu3bff.xn--p1ai'), $appRoutes1);
