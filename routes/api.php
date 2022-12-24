<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackwordController;
use App\Http\Controllers\ShopController;
use App\Http\Resources\OcbsResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\PotrebsResource;
use App\Http\Resources\ShopPaysResource;
use App\Models\Ocbs;
use App\Models\Page;
use App\Models\Pays;
use App\Models\Pots;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => 'cors'], function () {
Route::post('sendOrder', [BackwordController::class, 'sendOrder']);
Route::post('sendMsg', [BackwordController::class, 'sendMsg']);
Route::get('sendOrder', [BackwordController::class, 'sendOrder']);
Route::get('goods', [ShopController::class, 'show']);

// требы
Route::get('trebs', fn () => new PotrebsResource(Pots::all()));
Route::get('page/{pageNow}', fn ($pageNow) => new PageResource(Page::findOrFail($pageNow)));
Route::get('parser', [ShopController::class, 'parsingDataFiles']);

// Route::group(['middleware' => 'auth'], function () {
    Route::get('shopPays', fn () => new ShopPaysResource(Pays::all()))
        // ->middleware('auth')
    ;
    Route::get('ocbs', fn () => new OcbsResource(Ocbs::all()))
        // ->middleware('auth')
    ;
// });
