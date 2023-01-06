<?php

namespace Modules\ZemkDi\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DiImageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('zemkdi::index');

        $in = [
            'pages' => [
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
            ]
        ];
        $directory = 'public/zemkdi/img';
        $in['files'] = Storage::allFiles($directory);
        $in['filesUrl'] = [];

        foreach ($in['files'] as $f) {
            $in['filesUrl'][] = Storage::url($f);
        }

        // dd($in['filesUrl']);
        // dd($in['files']);

        // echo 'pageName: ' . $pageName;

        // $in['page'] = $pageName;

        return view('zemkdi::services.images', $in);
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
     * Остановить валидацию после первой неуспешной проверки.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'img' => 'required|image',
        //     // 'body' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'img' => 'required|image'
            // 'title' => 'required|unique:posts|max:255',
            // 'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('service/images')
                ->withErrors($validator)
                ->withInput();
        } else {

            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Только оригинальное имя файла
            $filename = str_slug(pathinfo($filenameWithExt, PATHINFO_FILENAME));
            // Расширение
            $extention = $request->file('img')->getClientOriginalExtension();
            // Путь для сохранения
            $fileNameToStore = $filename . "_" . date('YmdHis') . "." . $extention;
            $dirToStore = '/zemkdi/img';
            // Сохраняем файл
            // $path = $request->file('img')->storeAs('../../Modules/ZemkDi/Resources/to-public-zemkdi'.$dirToStore, $fileNameToStore);
            $path2 = $request->file('img')->storeAs('public' . $dirToStore, $fileNameToStore);
            // copy( $_SERVER['DIRECTORY_ROOT'].'/storage/app/public'.$dirToStore.$fileNameToStore , $_SERVER['DIRECTORY_ROOT'].'/Modules/ZemkDi/Resources/to-public-zemkdi'.$dirToStore.$fileNameToStore );

            return redirect('service/images')
                ->with('success', 'Изображение добавлено <br/> <input type="text" 
            style="padding: 5px; width:100%"
            value="/storage' . $dirToStore . '/' . $fileNameToStore . '" />');
        }
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $r)
    {
        Storage::delete( 'public/'.$r->image);
        return redirect('service/images')->with('success', 'Изображение удалено');
        dd($r->image);
    }
}
