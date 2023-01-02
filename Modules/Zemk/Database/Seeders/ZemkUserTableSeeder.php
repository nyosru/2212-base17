<?php

namespace Modules\Zemk\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Zemk\Entities\ZemkUsers;

class ZemkUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        ZemkUsers::factory()->count(10)->create();
        // $this->call("OthersTableSeeder");
    }
}
