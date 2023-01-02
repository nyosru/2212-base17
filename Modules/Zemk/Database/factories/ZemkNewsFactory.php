<?php

namespace Modules\Zemk\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Modules\Zemk\Entities\ZemkNews;
use Modules\Zemk\Entities\ZemkUsers;

class ZemkNewsFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZemkNews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $ee = [
            'head' => $this->faker->name(),
            // 'date' => date('Y-m-d'),
            'date' => now(),
            'opis_small' => $this->faker->text(100),
            'opis' => $this->faker->text(500),
            // 'author_id' => 1,
        ];

        $n = rand(1, 10);
        // if ($n == 1) {
        //     $ee['autor_origin'] = 1;
        // } else 
        // if ($n > 5) {
            $ee['author_id'] = ZemkUsers::all()->random()->id;
        // } else {
        //     // $ee['author_id'] = 1;
        // }

        if (1 < $n && $n <= 4) {
            $ee['site_origin'] = 'gosuslugi.ru';
        }

        // $table->int('autor_origin')->nullable();
        // $table->string('site_origin')->nullable();

        return $ee;
    }
}
