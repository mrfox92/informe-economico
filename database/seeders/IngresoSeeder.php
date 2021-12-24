<?php

namespace Database\Seeders;

use App\Models\Ingreso;
use Illuminate\Database\Seeder;

class IngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //  ingresos año 2019 - 2020
        $ingresos = [
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  48400,
                'fecha_ingreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  42050,
                'fecha_ingreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  56300,
                'fecha_ingreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  57800,
                'fecha_ingreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  49450,
                'fecha_ingreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-10-01 12:00:00'
            ],
            //  ID: 2 tipo ingreso
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  28000,
                'fecha_ingreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  40000,
                'fecha_ingreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  32000,
                'fecha_ingreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  42500,
                'fecha_ingreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  30000,
                'fecha_ingreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  35000,
                'fecha_ingreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  41000,
                'fecha_ingreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  40000,
                'fecha_ingreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  35000,
                'fecha_ingreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  44000,
                'fecha_ingreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  40000,
                'fecha_ingreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  2,
                'monto'             =>  35000,
                'fecha_ingreso'     =>  '2020-10-01 12:00:00'
            ],
            //  ID: 3 tipo ingreso
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  63360,
                'fecha_ingreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  43000,
                'fecha_ingreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  55000,
                'fecha_ingreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  44000,
                'fecha_ingreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  44000,
                'fecha_ingreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  53200,
                'fecha_ingreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  54500,
                'fecha_ingreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  52400,
                'fecha_ingreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  40000,
                'fecha_ingreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  40000,
                'fecha_ingreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  40000,
                'fecha_ingreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  3,
                'monto'             =>  56000,
                'fecha_ingreso'     =>  '2020-10-01 12:00:00'
            ],
            //  tipo ingreso 4 - Otros ingresos
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2019-11-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2019-12-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-01-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-02-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-03-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-04-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-05-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-06-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-07-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-08-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-09-01 12:00:00'
            ],
            [
                'tipo_ingreso_id'   =>  4,
                'monto'             =>  0,
                'fecha_ingreso'     =>  '2020-10-01 12:00:00'
            ],

            //  ingresos año 2018 - 2019 - Ejemplo periodo anterior

            [
                'tipo_ingreso_id'   =>  1,
                'monto'             =>  3072414,
                'fecha_ingreso'     =>  '2018-12-03 12:00:00'
            ],
        ];

        foreach ($ingresos as $ingreso) {

            Ingreso::factory(1)->create($ingreso);
            // Ingreso::factory(1)->count(10)->create();
        }
    }
}
