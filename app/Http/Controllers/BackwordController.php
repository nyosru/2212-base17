<?php

namespace App\Http\Controllers;

use App\Models\Osts;
use Illuminate\Http\Request;
use Nyos\Msg;

class BackwordController extends Controller
{

    public static $replace = [
        'fio' => 'Как зовут',
        'phone' => 'Телефон',
        'socweb' => 'Соц.сеть',
        'predlogau' => 'Немного о себе',
        'f_name' => 'Имя',
        'f_soname' => 'отчество',
        'f_family' => 'фамилия',
        'f_graj' => 'гражданство',
        'f_dr' => 'день рожденья',
        'f_inn' => 'ИНН',
        'f_orgnip' => 'ОГРНИП',
        'f_socweb' => 'соц сеть',
        'f_polza' => 'что принесёт в коллектив',
        'f_pasp_seriya' => 'павспорт серия',
        'f_pasp_data' => 'паспорт когда выдан',
        'f_pasp_kem_vudan' => 'паспорт кем выдан',
        'f_pasp_reg' => 'адрес регистрации',

    ];

    public static function toNormNum($str)
    {
        return round(str_replace(',', '.', preg_replace("/[^,.0-9]/", '', $str)), 2);
    }

    /**
     * @return Renderable
     */
    public function creatMsg(string $fio, string  $phone, array $kolvo, object $goods)
    {
        $text = '----- Новый заказ -----' . PHP_EOL;
        $text .= 'фио:' . ($fio ?? '--') . PHP_EOL;
        $text .= 'тел:' . ($phone ?? '--') . PHP_EOL . PHP_EOL;

        $summa = 0;

        // dd($kolvo);

        foreach ($goods as $g) {
            if (!empty($kolvo[$g->id]) && $kolvo[$g->id] > 0) {
                // dd($g);
                // $text .= $g->naimenovanie . ' ' . $g->dobavka . ' (' . $g->cena1 . '/' . $g->cena2 . '/' . $g->cena3 . ')' . PHP_EOL;
                $text .= $g->naimenovanie . ' ' . $g->dobavka . PHP_EOL . '( ' . ($kolvo[$g->id] ?? '0') . ' ед * ' . $g->cena3 . ' = ';


                // $g->cena3

                // $summa0 = ( !empty($kolvo[$g->id]) $kolvo[$g->id] > 0 ) ?
                $summa0 = !empty($kolvo[$g->id]) ? round($kolvo[$g->id] * self::toNormNum($g->cena3), 2) : 0;
                $summa += $summa0;
                $text .= $summa0 . 'р )';
                $text .= PHP_EOL . PHP_EOL;
                // $text .= $return['good_db'][$g->id] . ' ед.' . PHP_EOL . PHP_EOL;
            }
        }

        $text .= 'Итого: ' . $summa;

        return (string) $text;
    }


    public static function sendMsg(Request $request)
    {

        $all = $request->all();
        // dd( $request->all() );

        $in = '';
        // $request->goods = [1, 2, 3];
        foreach ($all as $k => $v) {

            if ($k == 'start') {
                $start = $v;
            } else {
                // if (!empty($v)) {
                $in .= '--- ' . (self::$replace[$k] ?? $k) . ' ---' . PHP_EOL . $v . PHP_EOL;
            }
        }

        $text = (!empty($start) ? $start . PHP_EOL : '')  . $in;
        // dd($text);

        self::sendTelega($text);

        return true;
    }

    /**
     * sendOrder
     * @return Renderable
     */
    public function sendOrder(Request $request)
    {
        $in = [];
        // $request->goods = [1, 2, 3];
        foreach ($request->goods as $k => $v) {
            if (!empty($v)) {
                $in[] = $k;
            }
        }

        // $res = ShopOst::find($in);
        $res = Osts::find($in);
        // $i = $res->toArray();
        // select(['id','naimenovanie', 'dobavka','cena1','cena2','cena3'])->

        $text = (string) self::creatMsg($request->fio, $request->phone, $request->goods, $res);
        self::sendTelega($text);

        // dd([
        //     $text
        //     // $msg, 
        //     // $request->fio, $request->phone,
        //     //$i, 
        //     // $res, $request->goods, 789789
        // ]);

        $return = ['result' => true];
        return response()->json($return);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function sendTelega(string $text)
    {
        // вячеслав
        Msg::$admins_id[] = 729843637;
        Msg::sendTelegramm($text, null, 1);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
