<?php

use Modules\Zem\Http\Controllers\ZemController;

$appRoutes = function() {
    Route::get('/', [ZemController::class,'index']);
    Route::get('{any?}', [ZemController::class,'index']);
};

// Route::group(array('domain' => 'php-cat.com'), $appRoutes);
// ттт72.рф
// Route::group(array('domain' => 'xn--72-qmcaa.xn--p1ai'), $appRoutes);
// земельныйкадастр.рф
Route::group(array('domain' => 'xn-- -8sbapdamsjijo8bnp1lpa.xn--p1ai'), $appRoutes);
Route::group(array('domain' => 'zem.17.ru'), $appRoutes);
// Route::group(array('domain' => 'phpcat.base17.php-cat.com'), $appRoutes);
