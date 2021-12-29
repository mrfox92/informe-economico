<?php

namespace App\Http\Livewire;

use App\Models\TipoIngreso;
use Livewire\Component;
use Livewire\WithPagination;

class TipoIngresoComponent extends Component
{
    use WithPagination;

    public $id_tipo_ingreso;
    protected $listeners = ['delete'];
    public $titulo, $descripcion;
    public $view = 'tipo-ingresos-create';
    public $title = 'Nuevo Tipo ingreso';
    public $description = 'Registrar un nuevo tipo de ingreso';

    public function render()
    {
        $tipoIngresos = TipoIngreso::paginate(10);
        return view('livewire.tipo-ingreso-component', compact('tipoIngresos'));
    }


    public function delete(TipoIngreso $tipoIngreso)
    {
        $tipoIngreso->delete();
    }


    public function store()
    {
        $this->validate([
            'titulo'   =>  'required',
        ]);

        TipoIngreso::create([
            'titulo'        =>  $this->titulo,
            'descripcion'   =>  $this->descripcion,
        ]);

        $this->emit('saved');

        $this->default();
    }

    public function edit( $id )
    {
        $this->title = 'Editar Tipo ingreso';
        $this->description = 'Actualizar información tipo ingreso';

        $tipoIngreso = TipoIngreso::find($id);

        //  llenamos nuestras propiedades
        $this->id_tipo_ingreso = $tipoIngreso->id;
        $this->titulo = $tipoIngreso->titulo;
        $this->descripcion = $tipoIngreso->descripcion;
        $this->view = 'tipo-ingresos-edit';
    }

    public function update()
    {
        $this->validate([
            'titulo'   =>  'required',
        ]);

        $tipoIngreso = TipoIngreso::find( $this->id_tipo_ingreso );

        $tipoIngreso->update([
            'titulo'        =>  $this->titulo,
            'descripcion'   =>  $this->descripcion,
        ]);

        $this->emit('saved');

        $this->default();

    }

    public function default() {

        $this->title = 'Nuevo Tipo ingreso';
        $this->description = 'Registrar un nuevo tipo de ingreso';

        $this->titulo = '';
        $this->descripcion = '';

        $this->view = 'tipo-ingresos-create';

    }
}
