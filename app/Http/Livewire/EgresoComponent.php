<?php

namespace App\Http\Livewire;

use App\Models\Egreso;
use App\Models\TipoEgreso;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class EgresoComponent extends Component
{
    use WithPagination;

    public $egreso_id, $titulo, $tipo_egreso_id, $descripcion, $monto, $fecha_egreso;
    protected $listeners = ['delete'];
    public $view = 'create';
    public $title = 'Nuevo Egreso';
    public $description = 'Registrar un nuevo egreso';

    public function render()
    {
        $egresos = Egreso::with(['tipoEgreso'])->orderBy('id', 'desc')->paginate(25);
        $tipo_egresos = TipoEgreso::all();
        return view('livewire.egreso-component', compact('egresos', 'tipo_egresos'));
    }

    // public function destroy($id)
    // {
    //     Egreso::destroy($id);
    // }

    public function delete(Egreso $egreso)
    {
        // $egreso = Egreso::find( $id );
        $egreso->delete();
    }


    public function store()
    {
        $this->validate([
            'tipo_egreso_id'    =>  'required',
            'monto'             =>  'required',
            'fecha_egreso'      =>  'required'
        ]);

        Egreso::create([
            'user_id'           =>  auth()->user()->id,
            'tipo_egreso_id'    =>  $this->tipo_egreso_id,
            'monto'             =>  $this->monto,
            'fecha_egreso'      =>  $this->fecha_egreso
        ]);

        $this->emit('saved');

        $this->default();
    }

    public function edit( $id )
    {
        $this->title = 'Editar Egreso';
        $this->description = 'Actualizar información egreso';

        $egreso = Egreso::find($id);

        //  llenamos nuestras propiedades
        $this->egreso_id = $egreso->id;
        $this->tipo_egreso_id = $egreso->tipo_egreso_id;
        $this->monto = number_format($egreso->monto, 0, ',', '');
        $this->fecha_egreso = Carbon::parse( $egreso->fecha_egreso )->format('Y-m-d');

        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'tipo_egreso_id'    =>  'required',
            'monto'             =>  'required',
            'fecha_egreso'      =>  'required'
        ]);

        $egreso = Egreso::find( $this->egreso_id );

        $egreso->update([
            'user_id'           =>  auth()->user()->id,
            'tipo_egreso_id'    =>  $this->tipo_egreso_id,
            'monto'             =>  $this->monto,
            'fecha_egreso'      =>  $this->fecha_egreso
        ]);

        $this->emit('saved');

        $this->default();
    }

    public function default() {

        $this->title = 'Nuevo Egreso';
        $this->description = 'Registrar un nuevo egreso';

        $this->tipo_egreso_id = '';
        $this->monto = '';
        $this->fecha_egreso = '';

        $this->view = 'create';

    }
}
