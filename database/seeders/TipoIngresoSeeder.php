<?php

namespace Database\Seeders;

use App\Models\TipoIngreso;
use Illuminate\Database\Seeder;

class TipoIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_ingresos = [
            [
                'titulo'        =>  'Ofrenda Colecteros',
                'descripcion'   =>  'Ofrenda Colecteros'
            ],
            [
                'titulo'        =>  'Ofrenda Familiar',
                'descripcion'   =>  'Ofrenda Familiar'
            ],
            [
                'titulo'        =>  'Diezmo pastoral',
                'descripcion'   =>  'Diezmo pastoral'
            ],
            [
                'titulo'        =>  'Otros ingresos',
                'descripcion'   =>  'Otros ingresos'
            ],
        ];

        foreach ($tipo_ingresos as $item) {

            TipoIngreso::factory(1)->create($item);
        }
    }
}
