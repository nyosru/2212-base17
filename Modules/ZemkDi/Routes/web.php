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
use Modules\ZemkDi\Http\Controllers\DiImageController;
use Modules\ZemkDi\Http\Controllers\DiItemsController;
use Modules\ZemkDi\Http\Controllers\DiPageController;

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

        // Route::resource('/service/images', DiImageController::class );
        // форма загрузка картинки
        Route::get('/service/images', [DiImageController::class, 'index'])->name('zemk-di-images');
        // загрузка картинки, сохранение
        Route::put('/service/images', [DiImageController::class, 'store'])->name('zemk-di-images-put');
        // удаление
        Route::post('/service/images/delete', [DiImageController::class, 'destroy'])->name('zemk-di-images-delete');


        // редактирование страницы
        Route::get('/page/{pageName}', [DiController::class, 'pageEditor'])->name('zemk-page');

        // работа со страницами
        // показать форму изменений
        Route::get('/service/page/{pageName}', [DiPageController::class, 'index'])->name('zemk-di-page');
        // сохранить изменения
        Route::post('/service/page/{page_key}', [DiPageController::class, 'edit'])->name('zemk-di-page-edit');


        // работа со списками
        Route::prefix('service')->group(function () {
            Route::prefix('items')->group(function () {
                // показать форму изменений
                Route::get('{modName}', [DiItemsController::class, 'index'])->name('zemk-di-items');


                // изменить
                Route::get('{modName}/{id}/delete', [DiItemsController::class , 'destroy' ] )->name('zemk-di-items-one-delete');

                // изменить
                Route::post('{modName}/{id}/save', [DiItemsController::class , 'update' ] )->name('zemk-di-items-one-save');

                // работа с 1 итемом
                Route::get('{modName}/{modId}/{modAction?}', [DiItemsController::class, 'indexOne'])->name('zemk-di-items-one');



            });
        });
    });


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
