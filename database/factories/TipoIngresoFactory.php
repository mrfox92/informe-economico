<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipoIngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titulo = $this->faker->sentence(3);
        $descripcion = $this->faker->sentence(10);

        return [

            'titulo'            =>  $titulo,
            'descripcion'       =>  $descripcion
        ];
    }
}
