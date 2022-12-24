<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateCarStController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($polotno_x = 500, $polotno_y = 500, $line_kolvo = 4, $stolb_kolvo = null)
    {

        $img = '<svg version = "1.1"
            baseProfile="full"
            xmlns = "http://www.w3.org/2000/svg" 
            xmlns:xlink = "http://www.w3.org/1999/xlink"
            xmlns:ev = "http://www.w3.org/2001/xml-events"
            height="' . $polotno_x . 'px" width="' . $polotno_y . 'px"
            viewBox="0 0 ' . $polotno_x . ' ' . $polotno_y . '" preserveAspectRatio="none">';
        $img .= '<g style="stroke: #E15720; stroke-width: 2px;">';

        // $img .= '<line x1="10" y1="10" x2="80" y2="150" />';
        // $img .= '<line x1="80" y1="10" x2="80" y2="150" />';

        $lines = [
            // [ 0 , 100 , 500 , 100 ],

            [0, 500, 500, 500, 0.2],
            [500, 0, 500, 500, 0.2],

            // [0, 70, 300, 70],
            // [0, 0, 300, 0],
            // [ 10 , 110 , 120 , 120 ],

        ];

        foreach ($lines as $l) {
            $img .= '<line x1="' . $l[0] . '" y1="' . $l[1] . '" x2="' . $l[2] . '" y2="' . $l[3] . '" style="opacity:' . ($l[4] ?? 1) . ';" />';
        }

        $tchk = [
            // [15, 15],
            // [ 10 , 110 , 120 , 120 ],
        ];

        $ls = 10;
        $lstep = 50;

        $max = 5;

        if ($line_kolvo % 2 != 1) {        
            $line_kolvo = $line_kolvo - 1;
        }

        $lines_step = 20;

        for ($line = 0; $line < $line_kolvo; $line++) {

            $line_height = $lines_step + $lines_step * $line;

            for ($e = 0; $e <= $max; $e++) {

                if ($line % 2 || $e != $max) {
                    $tchk[] = [
                        ($line % 2 ? 0 : (ceil($lstep / 2))) +
                            ($ls + $lstep * $e), $line_height
                    ];
                }

                // $tchk[] = [
                //     // (ceil($lstep/2)) + 
                //     ($ls + $lstep * $e), $line_height*2
                // ];

                // if ($e != $max)
                //     $tchk[] = [
                //         (ceil($lstep / 2)) +
                //             ($ls + $lstep * $e), $line_height*2+$line_height
                //     ];
            }
        }

        foreach ($tchk as $l) {
            // $img .= '<line x1="'.$l[0].'" y1="'.$l[1].'" x2="'.$l[2].'" y2="'.$l[3].'" />';
            $img .= '<circle cx="' . $l[0] . '" cy="' . $l[1] . '" r="' . ($l[2] ?? 3) . '" style="fill:red; fill-opacity:0.5;" />';
        }



        // $img .= '<!-- Left Diagonal line   -->
        //        <line x1="40" y1="60" x2="70" y2="20" />';
        // $img .= '<!-- Right Diagonal line   -->
        //        <line x1="90" y1="20" x2="120" y2="60" />';
        $img .= '</g></svg>';
        die($img);
        //
        // dd(121);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
