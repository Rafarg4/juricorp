<?php

namespace Database\Factories;

use App\Models\Expediente_detalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class Expediente_detalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expediente_detalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cliente' => $this->faker->randomDigitNotNull,
        'id_expediente' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
