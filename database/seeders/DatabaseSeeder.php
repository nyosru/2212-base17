<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Zemk\Database\Seeders\ZemkNewsTableSeeder;
use Modules\Zemk\Database\Seeders\ZemkUserTableSeeder;
use Modules\Zemk\Entities\ZemkNews;
use Modules\Zemk\Entities\ZemkUser;
use Modules\Zemk\Entities\ZemkUsers;

// use Modules\Zemk\Database\Seeders\ZemkDatabaseSeeder;
// use Modules\Zemk\Database\Seeders\ZemkNewsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
                ZemkUserTableSeeder::class,
                ZemkNewsTableSeeder::class,
                
        ]);

        // \App\Models\User::factory(10)->create();
        // ZemkNews ZemkDatabaseSeeder::factory(50)->create();
        // ZemkNewsTableSeeder::factory(10)->create();
        // factory( ZemkNews::class , 50 )->create();
        
        // ZemkUsers::factory()->count(10)->create();
        // ZemkNews::factory()->count(50)->create();
    }
}
