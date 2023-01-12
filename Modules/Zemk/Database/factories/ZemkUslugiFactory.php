<?php

namespace Modules\Zemk\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Zemk\Entities\ZemkUslugi;

class ZemkUslugiFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZemkUslugi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ee = [
            'head' => $this->faker->name(),
            'opis' => $this->faker->text(100),
            'sort' => rand(1, 99)
        ];
        $ee['key'] = str_slug($ee['head'].rand());
        return $ee;
    }
}
