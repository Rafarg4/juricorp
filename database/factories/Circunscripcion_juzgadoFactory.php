<?php

namespace Database\Factories;

use App\Models\Circunscripcion_juzgado;
use Illuminate\Database\Eloquent\Factories\Factory;

class Circunscripcion_juzgadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Circunscripcion_juzgado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_juzgado' => $this->faker->randomDigitNotNull,
        'id_circunscripcion' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
