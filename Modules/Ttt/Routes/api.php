<?php

use App\Http\Controllers\BackwordController;
use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/ttt', function (Request $request) {
//     return $request->user();
// });

Route::post('ttt/sendMsg', [BackwordController::class, 'sendMsg']);