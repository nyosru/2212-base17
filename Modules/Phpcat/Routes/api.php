<?php

use Illuminate\Http\Request;
use Modules\Phpcat\Entities\PhpcatNews as EntitiesPhpcatNews;
use Modules\Phpcat\Entities\PhpcatTest;
use Modules\Phpcat\Http\Controllers\PhpcatTestsController;
use Modules\Phpcat\Http\Controllers\TestController;
use Modules\Phpcat\Transformers\PhpcatNewsResource;
use Modules\Phpcat\Transformers\PhpcatTestResource;

Route::get('/phpcat/news', function (Request $request) {
    return new PhpcatNewsResource( EntitiesPhpcatNews::all()->sortByDesc('date') );
});


Route::get('/phpcat/tests', [ TestController::class , 'index' ] );
Route::post('/phpcat/tests', [ TestController::class , 'store' ] );

// Route::resource('/phpcat/tests', TestController::class );
// Route::get('/phpcat/tests', [ TestController::class , 'store' ] );
// Route::apiResource('/phpcat/tests', TestController::class );

// Route::get('/phpcat/tests', function (Request $request) {
//     return new PhpcatTestResource( PhpcatTest::all()->sortByDesc('date') );
// });
