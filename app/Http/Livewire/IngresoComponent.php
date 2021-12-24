<?php

namespace App\Http\Livewire;

use App\Models\Ingreso;
use App\Models\TipoIngreso;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class IngresoComponent extends Component
{
    use WithPagination;

    public $ingreso_id, $tipo_ingreso_id, $titulo, $descripcion, $monto, $fecha_ingreso;
    protected $listeners = ['delete'];
    public $view = 'create';
    public $title = 'Nuevo Ingreso';
    public $description = 'Registrar un nuevo ingreso';

    // public $search = 'Ofrenda Colecteros';

    public function render()
    {
        $ingresos = Ingreso::with(['tipoIngreso'])->orderBy('id', 'desc')->paginate(25);
        //  tipo ingresos - listado
        $tipo_ingresos = TipoIngreso::all();

        return view('livewire.ingreso-component', compact('ingresos', 'tipo_ingresos'));
    }

    // public function destroy($id)
    // {
    //     Ingreso::destroy($id);
    // }

    public function delete(Ingreso $ingreso)
    {
        // $egreso = Egreso::find( $id );
        $ingreso->delete();
    }

    public function store()
    {
        $this->validate([
            'tipo_ingreso_id'   =>  'required',
            'monto'             =>  'required',
            'fecha_ingreso'     =>  'required'
        ]);

        Ingreso::create([
            'user_id'           =>  auth()->user()->id,
            'tipo_ingreso_id'   =>  $this->tipo_ingreso_id,
            'monto'             =>  $this->monto,
            'fecha_ingreso'     =>  $this->fecha_ingreso
        ]);

        $this->emit('saved');

        $this->default();
    }

    public function edit( $id )
    {
        $this->title = 'Editar Ingreso';
        $this->description = 'Actualizar información ingreso';

        $ingreso = Ingreso::find($id);

        //  llenamos nuestras propiedades
        $this->ingreso_id = $ingreso->id;
        $this->tipo_ingreso_id = $ingreso->tipo_ingreso_id;
        $this->monto = number_format($ingreso->monto, 0, ',', '');
        $this->fecha_ingreso = Carbon::parse( $ingreso->fecha_ingreso )->format('Y-m-d');

        $this->view = 'edit';
    }

    public function update()
    {

        $this->validate([
            'tipo_ingreso_id'   =>  'required',
            'monto'             =>  'required',
            'fecha_ingreso'     =>  'required'
        ]);

        $ingreso = Ingreso::find( $this->ingreso_id );

        $ingreso->update([
            'user_id'           =>  auth()->user()->id,
            'tipo_ingreso_id'   =>  $this->tipo_ingreso_id,
            'monto'             =>  $this->monto,
            'fecha_ingreso'     =>  $this->fecha_ingreso
        ]);

        $this->emit('saved');

        $this->default();

    }

    public function default() {

        $this->title = 'Nuevo Ingreso';
        $this->description = 'Registrar un nuevo ingreso';

        $this->tipo_ingreso_id = '';
        $this->monto = '';
        $this->fecha_ingreso = '';

        $this->view = 'create';

    }
}
