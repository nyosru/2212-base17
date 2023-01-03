<?php

namespace Modules\Zemk\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Zemk\Database\Seeders\ZemkNewsTableSeeder;
use Modules\Zemk\Database\Seeders\ZemkUslugiTableSeeder;
use Modules\Zemk\Database\Seeders\ZemkUserTableSeeder;

class ZemkDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(
            [
                ZemkUserTableSeeder::class,
                ZemkNewsTableSeeder::class,
                ZemkUslugiTableSeeder::class,
            ]
        );
    }
}
