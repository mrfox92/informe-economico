<?php

namespace Database\Seeders;

use App\Models\Egreso;
use Illuminate\Database\Seeder;

class EgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $egresos = [
            // Gastos generales
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  20400,
                'fecha_egreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  25900,
                'fecha_egreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  51290,
                'fecha_egreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  60690,
                'fecha_egreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  46886,
                'fecha_egreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  9100,
                'fecha_egreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  12300,
                'fecha_egreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  6600,
                'fecha_egreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  5800,
                'fecha_egreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  6200,
                'fecha_egreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  5500,
                'fecha_egreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  1,
                'monto'             =>  13400,
                'fecha_egreso'     =>  '2020-10-01 12:00:00'
            ],
            // Ayuda social
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  2,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-10-01 12:00:00'
            ],
            // Compra bienes, insumos mantención Templo
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  344300,
                'fecha_egreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  349000,
                'fecha_egreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-10-01 12:00:00'
            ],
            // Gasto misionero Evang
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  30000,
                'fecha_egreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_egreso'     =>  '2020-10-01 12:00:00'
            ],
            // Diezmo Ofrendas
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  7640,
                'fecha_egreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  8205,
                'fecha_egreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  8830,
                'fecha_egreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  10030,
                'fecha_egreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  7945,
                'fecha_egreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  10000,
                'fecha_egreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  10000,
                'fecha_egreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  15000,
                'fecha_egreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  15000,
                'fecha_egreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  20000,
                'fecha_egreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  20000,
                'fecha_egreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  5,
                'monto'             =>  20000,
                'fecha_egreso'     =>  '2020-10-01 12:00:00'
            ],
            // Diezmo Pastoral
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  63360,
                'fecha_egreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  43000,
                'fecha_egreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  55000,
                'fecha_egreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  44000,
                'fecha_egreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  44000,
                'fecha_egreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  53200,
                'fecha_egreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  54500,
                'fecha_egreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  52400,
                'fecha_egreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  40000,
                'fecha_egreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  40000,
                'fecha_egreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  40000,
                'fecha_egreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_egreso_id'   =>  6,
                'monto'             =>  56000,
                'fecha_egreso'     =>  '2020-10-01 12:00:00'
            ],

            //  ingresos año 2018 - 2019 - Ejemplo periodo anterior

            [
                'tipo_egreso_id'   =>  3,
                'monto'             =>  1850370,
                'fecha_egreso'     =>  '2019-01-02 12:00:00'
            ],
        ];

        foreach ($egresos as $egreso) {

            Egreso::factory(1)->create($egreso);
            // factory(Egreso::class, 1)->create();
        }
    }
}
