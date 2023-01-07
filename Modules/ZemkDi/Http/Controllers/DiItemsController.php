<?php

namespace Modules\ZemkDi\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Zemk\Entities\ZemkNews;
use Modules\Zemk\Entities\ZemkUslugi;
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

    public static $polyaType = [];

    /**
     * валидация для сохранения изменений / добавления
     */
    public static $validPravila = [
        // // 'title' => 'required|unique:posts|max:255',
        // 'head' => 'required',
        // 'date' => 'required',
        // 'opis_small' => 'required',
        // 'opis' => 'required',
        // 'author_id' => 'required',
    ];

    private static function setup($modName)
    {
        if ($modName == 'uslugi') {

            self::$polyaType = [
                'head' => 'string',
                // 'date' => 'date',
                // 'opis_small' => 'textareaHtml',
                'opis' => 'textareaHtml',
                'sort' => 'int-1-99',
                // 'created_at' => 'noedit',
                // 'updated_at' => 'noedit',
                // 'deleted_at' => 'noedit',
                // 'author_id' => 'int'
            ];

            /**
             * валидация для сохранения изменений / добавления
             */
            self::$validPravila = [
                // 'title' => 'required|unique:posts|max:255',
                'head' => 'required',
                // 'date' => 'required',
                // 'opis_small' => 'required',
                'opis' => 'required',
                'sort' => 'required|min:1|max:99',
                // 'author_id' => 'required',
            ];
        } elseif ($modName == 'news') {

            self::$polyaType = [
                'head' => 'string',
                'date' => 'date',
                'opis_small' => 'textareaHtml',
                'opis' => 'textareaHtml',
                // 'created_at' => 'noedit',
                // 'updated_at' => 'noedit',
                // 'deleted_at' => 'noedit',
                'author_id' => 'int'
            ];

            /**
             * валидация для сохранения изменений / добавления
             */
            self::$validPravila = [
                // 'title' => 'required|unique:posts|max:255',
                'head' => 'required',
                'date' => 'required',
                'opis_small' => 'required',
                'opis' => 'required',
                'author_id' => 'required',
            ];
        }
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($modName)
    {

        self::setup($modName);

        $in = [
            'pages' => self::$pages,
            'modName' => $modName
        ];

        // $in['items'] = new ZemkNewsCollection( ZemkNews::all() );
        if ($modName == 'uslugi') {
            $in['items'] = ZemkUslugi::orderByDesc('sort')->get();
        } elseif ($modName == 'news') {
            $in['items'] = ZemkNews::orderByDesc('date')->get();
        }

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

        self::setup($modName);

        $in = [
            'pages' => self::$pages,
            'modName' => $modName,
            'modId' => $modId,
            'modAction' => $modAction,
            'polyaType' => self::$polyaType
        ];

        // $in['items'] = new ZemkNewsCollection( ZemkNews::all() );
        if ($modName == 'uslugi') {
            // $in['items'] = ZemkUslugi::orderByDesc('sort')->get();
            $in['item0'] = ZemkUslugi::where('id', $modId)->get();
            $in['item'] = $in['item0'][0]->toArray();
        } elseif ($modName == 'news') {
            $in['item0'] = ZemkNews::where('id', $modId)->get()[0];
            $in['item'] = $in['item0']->toArray();
        }

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

        self::setup($modName);

        // Получить проверенные входные данные...
        $validated = $request->validate(self::$validPravila);

        if ($modName == 'uslugi') {
            // записать новое
            ZemkUslugi::insert($validated);
            // удалить текущее
            ZemkUslugi::where('id', $id)->delete();
        } elseif ($modName == 'news') {
            // записать новое
            ZemkNews::insert($validated);
            // удалить текущее
            ZemkNews::where('id', $id)->delete();
        }
        return redirect('/service/items/'.$modName)
            ->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($modName, $id)
    {

        if ($modName == 'uslugi') {
            ZemkUslugi::where('id', $id)->delete();
        } elseif ($modName == 'news') {
            ZemkNews::where('id', $id)->delete();
        }

        return redirect('/service/items/'.$modName)
            ->with('success', 'Удалено');
    }
}
