<?php

namespace Database\Factories;

use App\Models\TipoIngreso;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::all()->random();
        $tipo_ingreso = TipoIngreso::all()->random();
        $fecha_ingreso   = $this->faker->dateTimeBetween('-11 month', '+1 month');

        return [

            'user_id'           =>  $user->id,
            'tipo_ingreso_id'   =>  $tipo_ingreso->id,
            'monto'             =>  $this->faker->randomElement([48400, 42050, 56300, 57800, 49450, 35000, 41000, 40000, 44000]),
            'fecha_ingreso'     =>  $fecha_ingreso
        ];
    }
}
