<?php

namespace Modules\Zemk\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Zemk\Entities\ZemkUslugi;

class ZemkUslugiTableSeeder extends Seeder
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
        ZemkUslugi::factory()->count(10)->create();
    }
}
