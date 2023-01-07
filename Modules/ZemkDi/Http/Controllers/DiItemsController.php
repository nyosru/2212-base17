<?php

namespace Modules\ZemkDi\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Zemk\Entities\ZemkNews;
use Modules\Zemk\Transformers\ZemkNewsCollection;

class DiItemsController extends Controller
{


    static $pages = [
        [
            'name' => 'О нас',
            'link' => 'about'
        ],
        [
            'name' => 'Супер',
            'link' => 'super'
        ],
        [
            'name' => 'Контакты',
            'link' => 'contact'
        ]
    ];

    static $polyaType = [
        'head' => 'string',
        'date' => 'date',
        'opis_small' => 'textareaHtml',
        'opis' => 'textareaHtml',
        // 'created_at' => 'noedit',
        // 'updated_at' => 'noedit',
        // 'deleted_at' => 'noedit',

    ];

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($modName)
    {
        $in = [
            'pages' => self::$pages,
            'modName' => $modName
        ];

        // $in['items'] = new ZemkNewsCollection( ZemkNews::all() );
        $in['items'] = ZemkNews::orderByDesc('date')->get();

        return view('zemkdi::services.items', $in);
        // return view('zemkdi::index');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function indexOne(string $modName, int $modId, $modAction = null)
    {

        // dd(__FUNCTION__);

        $in = [
            'pages' => self::$pages,
            'modName' => $modName,
            'modId' => $modId,
            'modAction' => $modAction,
            'polyaType' => self::$polyaType
        ];

        // $in['items'] = new ZemkNewsCollection( ZemkNews::all() );
        $in['item0'] = ZemkNews::where('id', $modId)->get()[0];
        $in['item'] = $in['item0']->toArray();

        return view('zemkdi::services.itemsOne', $in);
        // return view('zemkdi::index');

    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('zemkdi::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('zemkdi::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('zemkdi::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $modName, $id)
    {
        // dd( [ $modName , $id ] );
        $in = [];
        foreach (self::$polyaType as $k => $v) {
            $in[$k] = $request->$k;
            // dd($request->$k);
        }
        $in['author_id'] = 1;
        // $in['author_id'] = 1;
        // dd([$request, $id]);
        // dd('in',$in);
        ZemkNews::insert($in);
        // dd($e->id);
        ZemkNews::where('id', $id)->delete();
        return redirect('/service/items/news')
            ->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy( $modName , $id )
    {
        ZemkNews::where('id', $id)->delete();
        return redirect('/service/items/news')
            ->with('success', 'Удалено');

    }
}
