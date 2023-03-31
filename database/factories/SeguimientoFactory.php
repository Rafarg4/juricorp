<?php

namespace Database\Factories;

use App\Models\Seguimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeguimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seguimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->text,
        'curso_actividad_expediente' => $this->faker->text,
        'escrito' => $this->faker->text,
        'proximo_paso' => $this->faker->text,
        'escrito_actualizado' => $this->faker->text,
        'preparado_por' => $this->faker->text,
        'controlado_por' => $this->faker->text,
        'supervision_text' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
