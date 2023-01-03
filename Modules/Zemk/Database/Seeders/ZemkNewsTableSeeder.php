<?php

namespace Modules\Zemk\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Zemk\Entities\ZemkNews;

class ZemkNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call("OthersTableSeeder");
        // ZemkNews::factory()->count(50)->create();
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     // 'password' => Hash::make('password'),
        // ]);
        ZemkNews::factory()->count(50)->create();
    }
}
