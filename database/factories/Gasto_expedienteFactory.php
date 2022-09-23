<?php

namespace Database\Factories;

use App\Models\Gasto_expediente;
use Illuminate\Database\Eloquent\Factories\Factory;

class Gasto_expedienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gasto_expediente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'concepto' => $this->faker->text,
        'monto' => $this->faker->text,
        'fecha' => $this->faker->text,
        'id_expediente' => $this->faker->randomDigitNotNull,
        'archivo' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
