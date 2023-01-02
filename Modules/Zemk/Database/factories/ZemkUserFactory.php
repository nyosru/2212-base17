<?php
namespace Modules\Zemk\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Zemk\Entities\ZemkUsers;

class ZemkUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZemkUsers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $ee = [

            // $table->string('name');
            'name' => $this->faker->name(),
            // $table->string('email')->unique();
            // 'email' => rand(100, 9999) . 'bot@php-cat.com',
            'email' => $this->faker->email(),
            // 'website_for_news' => $this->faker->email(),
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password' = md5(rand(1,10))
            'password' => md5(rand(1, 10))
        ];

        // $n = rand(1, 10);
        // // if ($n == 1) {
        // //     $ee['autor_origin'] = 1;
        // // } else 
        // if (1 < $n && $n <= 4) {
        //     $ee['site_origin'] = 'gosuslugi.ru';
        // }

        // // $table->int('autor_origin')->nullable();
        // // $table->string('site_origin')->nullable();

        return $ee;
    }
}

