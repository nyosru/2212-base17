<?php

use Illuminate\Http\Request;
use Modules\Zemk\Entities\ZemkNews;
use Modules\Zemk\Transformers\ZemkNewsCollection;
use Modules\Zemk\Transformers\ZemkNewsFullCollection;
use Modules\Zemk\Transformers\ZemkNewsFullResource;
use Modules\Zemk\Transformers\ZemkNewsResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/zemk', function (Request $request) {
//     return $request->user();
// });

$appRoutes1 = function () {

    Route::get('/zemk/news/{id}', function ( $id ) {
        // return new ZemkNewsFullCollection(ZemkNews::where('id',$id)->paginate(0));
        return new ZemkNewsFullResource(ZemkNews::findOrFail($id));
    })->whereNumber('id')->name('newsShow');

    Route::get('/zemk/news', function (Request $request) {
        return new ZemkNewsCollection(ZemkNews::with('author')->orderBy('date', 'desc')->paginate(6));
    });

};

// Route::group(array('domain' => 'php-cat.com'), $appRoutes);
// ттт72.рф
// Route::group(array('domain' => 'xn--72-qmcaa.xn--p1ai'), $appRoutes);
// земельныйкадастр.рф
Route::group(array('domain' => 'xn--80aalcakqihin5bmo2koa.xn--p1ai'), $appRoutes1);
Route::group(array('domain' => 'zem.17.ru'), $appRoutes1);
