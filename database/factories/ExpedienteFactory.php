<?php

namespace Database\Factories;

use App\Models\Expediente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpedienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expediente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero' => $this->faker->text,
        'anho' => $this->faker->text,
        'caratula' => $this->faker->text,
        'id_circunscripcion' => $this->faker->randomDigitNotNull,
        'id_juzgado' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
