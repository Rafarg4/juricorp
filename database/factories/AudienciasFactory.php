<?php

namespace Database\Factories;

use App\Models\Audiencias;
use Illuminate\Database\Eloquent\Factories\Factory;

class AudienciasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Audiencias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'expediente_id' => $this->faker->randomDigitNotNull,
        'inicio_audiencia' => $this->faker->text,
        'find_audiencia' => $this->faker->text,
        'descripcion_audiencia' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
