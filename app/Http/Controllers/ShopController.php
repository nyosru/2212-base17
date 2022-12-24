<?php

namespace App\Http\Controllers;

use App\Http\Resources\GoodCollection;
use App\Models\Osts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Nyos\Msg;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{

    /** поля которые приводим к цифре */
    static public $polya_number_rub = [
        'debetNaNacloPerioda',
        'kreditNaNacloPerioda',
        'oborotDebet',
        'oborotKredit',
        'debetNaKonecPerioda',
        'kreditNaKonecPerioda'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $in = [
            // 'user0' => Auth::user() ,
            'user0' => session('user') ?? [],
            'dd' => 123
        ];
        // return view('narod::index', $in);
        return view('index', $in);
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
     * парсинг дата файлов
     */
    public function parsingDataFiles()
    {

        // //
        // else if ($request->action == 'scanDataFiles') {

        $scanFiles = [];
        $scanFiles[] = ['db_table' => 'shop_firs', 'file' => 'narod-data/IMFir.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_kontrs', 'file' => 'narod-data/IMKontr.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_pays', 'file' => 'narod-data/IMPay.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_pay_its', 'file' => 'narod-data/IMPayIt.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_pay_trs', 'file' => 'narod-data/IMPayTr.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_sets', 'file' => 'narod-data/IMSet.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_ocbs', 'file' => 'narod-data/IMOCB.csv'];
        // if (1 == 2) // формат
        $scanFiles[] = ['db_table' => 'shop_osts', 'file' => 'narod-data/IMOst.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_parts', 'file' => 'narod-data/IMPart.csv'];
        // if (1 == 1)
        $scanFiles[] = ['db_table' => 'shop_pay_ns', 'file' => 'narod-data/IMPayN.csv'];
        // if (1 == 1) // формат
        $scanFiles[] = ['db_table' => 'shop_pots', 'file' => 'narod-data/IMPot.csv'];
        // if (1 == 1) // формат
        $scanFiles[] = ['db_table' => 'shop_proects', 'file' => 'narod-data/Proekt.csv'];

        $return['resAll'] = 0;
        $return['res0'] = [];

        foreach ($scanFiles as $tt) {
            $re = self::scanData1C($tt['db_table'], $tt['file']);
            $return['res0'][] = $re;
            $return['res'][$tt['file']] = sizeof($re['data_rows'] ?? []);
            $return['resAll'] += sizeof($re['data_rows'] ?? []);
        }

        if ($return['resAll'] > 0) {
            // вячеслав
            // Msg::$admins_id[] = 729843637;
            Msg::sendTelegramm('Файлы данных обработаны, добавлено записей ' . ($return['resAll'] ?? 0), null, 2);
        }

        // Msg::sendTelegramm('Файлы данных обработаны, добавлено записей '. ( $return['resAll'] ?? 0 )  , null, 2);

        $return['data'] = '';
        // $return = [];
        // }
        //
        return response()->json($return);
    }

    /**
     * парсинг дата файла
     */
    public static function scanData1C($db_table, $file0, $codirovka = 'cp1251')
    {
        $return = ['scan_file' => $file0];

        if (Storage::exists($file0)) {

            $return['scan_file_y?'] = 'yes';

            // $return['data'] = self::scanData1C($file0);
            $dater = Storage::get($file0);
            // dd( iconv('cp1251','utf-8',$ee) );

            // переименование
            // Storage::move($file0, $file0 . '.old.' . date('Ymd_his'));

            if ($codirovka == 'cp1251') {
                $dater = iconv('cp1251', 'utf-8', $dater);
            }

            // $return['data0'] = $dater;
            $dater1 = explode("\n", $dater);

            $return['data_head'] = [];
            $return['data_rows'] = [];

            // проверяем формат файла
            $format_foo = false;
            for ($i = 0; $i <= 15; $i++) {
                if (strpos($dater1[$i] ?? 'x', '@@@=') !== false)
                    $format_foo = true;
            }

            foreach ($dater1 as $row) {

                // $return['rr'][] = $row;

                if ($format_foo === true) {
                    if (strpos($row, '@@@=') !== false) {
                        $format_foo = false;
                    }
                    continue;
                }

                // тащим шапку, первый проход
                if (empty($return['data_head'])) {
                    $return['data_head_ru0'] = explode(';', $row);
                    foreach ($return['data_head_ru0'] as $k => $r0 ) {
                        if (!empty($r0)) {

                            $r = camel_case(str_slug($r0));

                            // $return['data_head'][$k] = !empty($r) ? str_slug($r) : null;
                            $return['data_head'][$k] = !empty($r) ? $r : null;

                            if ($db_table === 'shop_sets') {
                                if (str_slug($r) == 'data') $return['data_head'][] = 'data_ru';
                                elseif (str_slug($r) == 'datadokp') $return['data_head'][] = 'datadokp_ru';
                            }
                        }
                    }
                }
                // если шапку уже собрали, обрабатываем данные
                else {

                    $in = [];
                    $re = explode(';', $row);

                    foreach ($re as $k => $t) {

                        // $k = camel_case(str_slug($k0));

                        if (!empty($return['data_head'][$k])) {

                            if( $return['data_head'][$k] == 'foto' && strpos( $t , '+' ) ){
                                $ee = explode('+',$t);
                                $t = $ee[0];
                            }
                            
                            // если цифра рублей ( 2 знака после , )
                            if (in_array( $return['data_head'][$k] , self::$polya_number_rub) !== false ) {
                                $in[$return['data_head'][$k]] = round( str_replace( [ ',' , '\''] , [ '.', '' ] , trim($t) ),2);
                            } else {
                                $in[$return['data_head'][$k]] = trim($t);
                            }

                            if ($db_table === 'shop_sets') {
                                if ($return['data_head'][$k] === 'data') $in['data_ru'] = date('Y-m-d', strtotime(substr($t, 0, 6) . '20' . substr($t, 6, 2)));
                                elseif ($return['data_head'][$k] === 'datadokp') $in['datadokp_ru'] = date('Y-m-d', strtotime(substr($t, 0, 6) . '20' . substr($t, 6, 2)));
                            }
                        }

                    }

                    $return['data_rows'][] = $in;
                    // $return['data_rows'][] = explode(';', $row);
                }
            }

            if (!empty($return['data_rows'])) {
                // DB::table('shop_firs')->truncate();
                DB::table($db_table)->truncate();
                // foreach ($return['data']['data_rows'] as $k) {
                foreach ($return['data_rows'] as $k) {
                    // ShopKontr::insert($k);
                    // DB::table('shop_firs')->insert($k);
                    DB::table($db_table)->insert($k);
                    // DB::table('shop_firs')->insert($return['data_rows']);
                }
            }
        }

        return $return;
        // return response()->json($return);
        // return view('narod::create');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        return new GoodCollection(Osts::all());
        // return new GoodCollection(Osts::paginate(10));
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
