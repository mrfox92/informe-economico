<?php

namespace Database\Seeders;

use App\Models\TipoEgreso;
use Illuminate\Database\Seeder;

class TipoEgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_egresos = [
            [
                'titulo'        =>  'Gastos generales',
                'descripcion'   =>  'Gastos generales'
            ],
            [
                'titulo'        =>  'Ayuda social',
                'descripcion'   =>  'Ayuda social'
            ],
            [
                'titulo'        =>  'Compra bienes, insumos mantención Templo',
                'descripcion'   =>  'Compra bienes, insumos mantención Templo'
            ],
            [
                'titulo'        =>  'Gasto misionero Evang',
                'descripcion'   =>  'Gasto misionero Evang'
            ],
            [
                'titulo'        =>  'Diezmo Ofrendas',
                'descripcion'   =>  'Diezmo Ofrendas'
            ],
            [
                'titulo'        =>  'Diezmo Pastoral',
                'descripcion'   =>  'Diezmo Pastoral'
            ],
        ];

        foreach ($tipo_egresos as $item) {

            TipoEgreso::factory(1)->create($item);
        }
    }
}
