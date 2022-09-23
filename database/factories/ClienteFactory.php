<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text,
        'apellido' => $this->faker->text,
        'ci' => $this->faker->text,
        'fecha_nacimiento' => $this->faker->text,
        'nacionalidad' => $this->faker->text,
        'distrito_origen' => $this->faker->text,
        'domicilio_particular' => $this->faker->text,
        'numero_casa' => $this->faker->text,
        'barrio' => $this->faker->text,
        'ciudad' => $this->faker->text,
        'numero_telefono' => $this->faker->text,
        'email' => $this->faker->text,
        'rede_social' => $this->faker->text,
        'nombre_apellido_coyuge' => $this->faker->text,
        'ci_coyuge' => $this->faker->text,
        'empresa_otro' => $this->faker->text,
        'direccion' => $this->faker->text,
        'numero_casa' => $this->faker->text,
        'telefono_fijo' => $this->faker->text,
        'telefono_laboral' => $this->faker->text,
        'email_laboral' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
