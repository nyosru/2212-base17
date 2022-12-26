<?php

use Illuminate\Http\Request;
use Modules\Phpcat\Entities\PhpcatNews as EntitiesPhpcatNews;
use Modules\Phpcat\Entities\PhpcatTest;
use Modules\Phpcat\Transformers\PhpcatNewsResource;
use Modules\Phpcat\Transformers\PhpcatTestResource;

Route::get('/phpcat/news', function (Request $request) {
    return new PhpcatNewsResource( EntitiesPhpcatNews::all()->sortByDesc('date') );
});

Route::get('/phpcat/tests', function (Request $request) {
    return new PhpcatTestResource( PhpcatTest::all()->sortByDesc('date') );
});
