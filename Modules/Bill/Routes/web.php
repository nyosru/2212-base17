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

// Route::prefix('bill')->group(function() {
//     Route::get('/', 'BillController@index');
// });


// <?php

// use Modules\Phpcat\Http\Controllers\PhpcatController;

use Modules\Bill\Http\Controllers\BillController;

$appRoutes = function() {
    // Route::get('/', [ BillController::class,'index']);
    // Route::get('{any?}', [BillController::class,'index']);
    Route::get('{any}', [BillController::class, 'page_page'])
    ->where('any', '.*')
    ;
};

// Route::group(array('domain' => 'php-cat.com'), $appRoutes);
Route::group(array('domain' => 'bill.17.ru'), $appRoutes);