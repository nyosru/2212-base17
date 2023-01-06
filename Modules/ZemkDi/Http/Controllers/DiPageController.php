<?php

namespace Modules\ZemkDi\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;

use Modules\Zemk\Entities\ZemkPage as DataModule;

class DiPageController extends Controller
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

    static function searchPage($key)
    {
        foreach (self::$pages as $a) {
            if ($a['link'] == $key)
                return $a;
        }
        return false;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($pageName)
    {

        $in = [
            'pages' => self::$pages
        ];

        $data = [];
        $in['html'] = '';
        $in['namePage'] = '';

        foreach ($in['pages'] as $a) {
            if ($a['link'] == $pageName) {
                $in['page_key'] = $pageName;
                $in['namePage'] = $a['name'];
                // $in['nowPage'] = $a['name'];
                // $data = DB::table('zemk_pages')->select('html')->where('name_key', $pageName)->first();
                $data = DataModule::select('html')->where('name_key', $pageName)->first();
                // dd($data);
                if (!empty($data->html)) {
                    $in['html'] = $data->html;
                } else {
                    $in['html'] = 'новая';
                }
            }
        }

        // dd($in);
        // dd([$pageName ?? 'x']);
        return view('zemkdi::services.page', $in);
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
    public function edit(Request $request, $page_key)
    {
        // dd('page_key', $page_key);

        // $data0 = DataModule::where('name_key', $page_key)->get();
        DataModule::where('name_key', $page_key)->delete();
        // $data = DB::table('zemk_pages')->where('name_key', $page_key)->first();
        // DB::table('zemk_pages')->where('name_key', $page_key)->delete();

        $d1 = self::searchPage($page_key);

        $data = [
            'name_key' => $page_key,
            'name' => $d1['name'],
            'html' => $request->html
        ];

        // $data = $data0->toArray();
        // $data[0]->name_key = $page_key;
        // $data[0]['html'] = $request->html;
        DB::table('zemk_pages')->insert($data);

        // dd($data);

        return redirect('service/page/' . $page_key)
            ->with('success', 'Изменения сохранены');

        // return view('zemkdi::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
