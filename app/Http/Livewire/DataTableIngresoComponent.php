<?php

namespace App\Http\Livewire;

use App\Models\Ingreso;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class DataTableIngresoComponent extends DataTableComponent
{
    // public function render()
    // {
    //     return view('livewire.data-table-ingreso-component');
    // }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Monto', 'monto')
                ->sortable()
                ->searchable(),
            Column::make('Fecha ingreso', 'fecha_ingreso')
                ->sortable()
                ->searchable(),
            Column::make('Tipo ingreso', 'tipoIngreso.titulo')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        $query = Ingreso::query();
        $query->with('tipoIngreso');

        return $query;
    }
}
