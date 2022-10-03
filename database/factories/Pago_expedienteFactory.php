<?php

namespace Database\Factories;

use App\Models\Pago_expediente;
use Illuminate\Database\Eloquent\Factories\Factory;

class Pago_expedienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pago_expediente::class;

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
        'expediente_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
