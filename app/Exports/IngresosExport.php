<?php

namespace App\Exports;

use App\Models\Ingreso;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\View\View;

class IngresosExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Ingreso::all();
    // }

    public function view(): View
    {
        return view('exports.ingresos', [
            'ingresos'  =>  Ingreso::with('tipoIngreso')->get()
        ]);
    }
}
