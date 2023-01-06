<?php

namespace Modules\ZemkDi\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DiController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

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

        return view('zemkdi::index', $in);
    }

    public function index2()
    {
        return view('zemkdi::index2');
    }

    public function pageEditor($pageName)
    {

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

        // echo 'pageName: ' . $pageName;

        $in['page'] = $pageName;

        return view('zemkdi::index2', $in);
    }


    public function images()
    {

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

        // echo 'pageName: ' . $pageName;

        // $in['page'] = $pageName;

        return view('zemkdi::index-images', $in);
    }

    public function imagesPut( Request $r )
    {

dd($r);

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
