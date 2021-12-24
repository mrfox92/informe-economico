<?php

namespace Database\Factories;

use App\Models\TipoEgreso;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EgresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::all()->random();
        $tipo_egreso = TipoEgreso::all()->random();
        $fecha_ingreso   = $this->faker->dateTimeBetween('-11 month', '+1 month');

        return [
            'user_id'           =>  $user->id,
            'tipo_egreso_id'    =>  $tipo_egreso->id,
            'monto'             =>  $this->faker->randomElement([20400, 25900, 51290, 46886, 9100, 12300, 6600, 5800, 6200, 5500, 13400]),
            'fecha_egreso'     =>  $fecha_ingreso
        ];
    }
}
