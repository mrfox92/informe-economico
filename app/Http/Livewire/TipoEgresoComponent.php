<?php

namespace App\Http\Livewire;

use App\Models\TipoEgreso;
use Livewire\Component;use Livewire\WithPagination;

class TipoEgresoComponent extends Component
{
    use WithPagination;
    public $id_tipo_egreso;
    protected $listeners = ['delete'];
    public $titulo, $descripcion;
    public $view = 'tipo-egreso-create';
    public $title = 'Nuevo Tipo Egreso';
    public $description = 'Registrar un nuevo tipo de egreso';

    public function render()
    {
        $tipoEgresos = TipoEgreso::paginate(10);
        return view('livewire.tipo-egreso-component', compact('tipoEgresos'));
    }

    public function delete(TipoEgreso $tipoEgreso)
    {
        $tipoEgreso->delete();
    }


    public function store()
    {
        $this->validate([
            'titulo'   =>  'required',
        ]);

        TipoEgreso::create([
            'titulo'        =>  $this->titulo,
            'descripcion'   =>  $this->descripcion,
        ]);

        $this->emit('saved');

        $this->default();
    }

    public function edit( $id )
    {
        $this->title = 'Editar Tipo Egreso';
        $this->description = 'Actualizar información tipo egreso';

        $tipoEgreso = TipoEgreso::find($id);

        //  llenamos nuestras propiedades
        $this->id_tipo_egreso = $tipoEgreso->id;
        $this->titulo = $tipoEgreso->titulo;
        $this->descripcion = $tipoEgreso->descripcion;
        $this->view = 'tipo-egreso-edit';
    }

    public function update()
    {
        $this->validate([
            'titulo'   =>  'required',
        ]);

        $tipoEgreso = TipoEgreso::find( $this->id_tipo_egreso );

        $tipoEgreso->update([
            'titulo'        =>  $this->titulo,
            'descripcion'   =>  $this->descripcion,
        ]);

        $this->emit('saved');

        $this->default();

    }

    public function default() {

        $this->title = 'Nuevo Tipo Egreso';
        $this->description = 'Registrar un nuevo tipo egreso';

        $this->titulo = '';
        $this->descripcion = '';

        $this->view = 'tipo-egreso-create';

    }
}
