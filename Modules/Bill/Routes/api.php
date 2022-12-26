<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

// Route::middleware('auth:api')->get('/bill', function (Request $request) {
//     return $request->user();
// });

Route::get('/bill/photo', function (Request $request) {
    $dir = '/public/bill/adv/';
    $files0 = Storage::allFiles($dir);
    foreach ($files0 as $f) {
        $files[] = str_replace('public', 'storage', $f);
    }
    return response()->json($files);
});
