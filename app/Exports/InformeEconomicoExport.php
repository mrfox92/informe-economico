<?php

namespace App\Exports;

use App\Models\Egreso;
use App\Models\Ingreso;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\View\View;

class InformeEconomicoExport implements FromView
{
    public $data;

    public $init_month, $init_year, $limit_month, $limit_year;

    public $old_init_year, $old_limit_year;
    public $total_ingresos_periodo, $saldo_ejercicio_anterior, $subtotal, $menos_egresos_periodo, $saldo_ejercicio_siguiente;

    public $ingresos = [];
    public $ingresos_meses = [];
    public $tipo_ingreso_mes = [];
    public $total_periodo = [];

    public $egresos = [];
    public $egresos_meses = [];
    public $tipo_egreso_mes = [];
    public $total_periodo_egresos = [];

    public function __construct( $data )
    {

        $this->init_month = $data['init_month'];
        $this->init_year = $data['init_year'];
        $this->limit_month = $data['limit_month'];
        $this->limit_year = $data['limit_year'];
        $this->data = $data;
    }

    private function calcularUtilidadPeriodoAnterior( $ingresos, $egresos )
    {
        return ( $ingresos - $egresos );
    }

    private function calcularSubtotal( $saldo_anterior, $ingresos )
    {
        return ( $saldo_anterior + $ingresos );
    }

    private function calcularPeriodoSiguiente( $subtotal, $egresos )
    {
        return ( $subtotal - $egresos );
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        // dd($this->init_month);
        // dd($this->init_year);
        // dd($this->limit_month);
        // dd($this->limit_year);

        // dd( $this->data );

        $this->old_init_year = ($this->init_year - 1);
        $this->old_limit_year = ($this->limit_year - 1);

        $old_from = '01-' . $this->init_month . '-' . $this->old_init_year;
        $old_to = '01-' . $this->limit_month . '-' . $this->old_limit_year;

        $old_from = Carbon::createFromFormat('d-m-Y', $old_from)->startOfMonth()->format('Y-m-d');
        $old_to = Carbon::createFromFormat('d-m-Y', $old_to)->endOfMonth()->format('Y-m-d');

        //  Periodo actual

        $from = '01-' . $this->init_month . '-' . $this->init_year;
        $to = '01-' . $this->limit_month . '-' . $this->limit_year;

        $from = Carbon::createFromFormat('d-m-Y', $from)->startOfMonth()->format('Y-m-d');
        $to = Carbon::createFromFormat('d-m-Y', $to)->endOfMonth()->format('Y-m-d');

        //  TODO: calcular ingresos neto x mes
        $this->ingresos = Ingreso::select(
            DB::raw('SUM(monto) as ingreso_neto'),
            DB::raw("DATE_FORMAT(fecha_ingreso, '%m') as monthKey")
        )
        ->whereBetween('fecha_ingreso', [$from, $to])
        ->groupBy('monthKey')
        ->orderBy('fecha_ingreso', 'ASC')
        ->get();

        //  TODO: calcular total ingresos por tipo de ingreso
        $this->ingresos_meses = Ingreso::with('tipoIngreso')->select(
            'tipo_ingreso_id',
            DB::raw('SUM(monto) as totales')
        )
        ->whereBetween('fecha_ingreso', [$from, $to])
        ->groupBy('tipo_ingreso_id')
        ->orderBy('tipo_ingreso_id', 'ASC')
        ->get();

        //  TODO: tipos ingresos ordenados por mes
        $this->tipo_ingreso_mes = Ingreso::with('tipoIngreso')
        ->whereBetween('fecha_ingreso', [$from, $to])
        ->orderBy('tipo_ingreso_id', 'ASC')
        ->orderBy('fecha_ingreso', 'ASC')
        ->get();

        //  TODO: calcular total ingresos - periodo seleccionado
        $this->total_periodo = Ingreso::select(
            DB::raw('SUM(monto) as total_ingresos')
        )
        ->whereBetween('fecha_ingreso', [$from, $to])
        ->get();

        /* ==== EGREGOS ===== */

        //  TODO: calcular egresos neto x mes
        $this->egresos = Egreso::select(
            DB::raw('SUM(monto) as egreso_neto'),
            DB::raw("DATE_FORMAT(fecha_egreso, '%m') as monthKey")
        )
        ->whereBetween('fecha_egreso', [$from, $to])
        ->groupBy('monthKey')
        ->orderBy('fecha_egreso', 'ASC')
        ->get();

        //  TODO: calcular total egresos por tipo de egreso
        $this->egresos_meses = Egreso::with('tipoEgreso')->select(
            'tipo_egreso_id',
            DB::raw('SUM(monto) as totales')
        )
        ->whereBetween('fecha_egreso', [$from, $to])
        ->groupBy('tipo_egreso_id')
        ->orderBy('tipo_egreso_id', 'ASC')
        ->get();

        //  TODO: tipos egresos ordenados por mes
        $this->tipo_egreso_mes = Egreso::with('tipoEgreso')
        ->whereBetween('fecha_egreso', [$from, $to])
        ->orderBy('tipo_egreso_id', 'ASC')
        ->orderBy('fecha_egreso', 'ASC')
        ->get();

        //  TODO: calcular total ingresos - periodo seleccionado
        $this->total_periodo_egresos = Egreso::select(
            DB::raw('SUM(monto) as total_egresos')
        )
        ->whereBetween('fecha_egreso', [$from, $to])
        ->get();


        /* ========== TOTAL PERIODO ANTERIOR ========== */

        //  TODO: calcular total ingresos - periodo anterior
        $total_ingresos_periodo_anterior = Ingreso::select(
            DB::raw('SUM(monto) as total_ingresos')
        )
        ->whereBetween('fecha_ingreso', [$old_from, $old_to])
        ->get();

        //  TODO: calcular total ingresos - periodo anterior
        $total_egresos_periodo_anterior = Egreso::select(
            DB::raw('SUM(monto) as total_egresos')
        )
        ->whereBetween('fecha_egreso', [$old_from, $old_to])
        ->get();

        /* ========== RESUMEN ANUAL ========== */

        // total_ingresos_periodo
        $this->total_ingresos_periodo = $this->total_periodo[0]->total_ingresos;
        // saldo_ejercicio_anterior
        $this->saldo_ejercicio_anterior = $this->calcularUtilidadPeriodoAnterior( $total_ingresos_periodo_anterior[0]->total_ingresos, $total_egresos_periodo_anterior[0]->total_egresos );

        // subtotal
        $this->subtotal = $this->calcularSubtotal( $this->saldo_ejercicio_anterior ,$this->total_ingresos_periodo );

        // menos_egresos_periodo
        $this->menos_egresos_periodo = $this->total_periodo_egresos[0]->total_egresos;

        //  saldo_ejercicio_siguiente
        $this->saldo_ejercicio_siguiente = $this->calcularPeriodoSiguiente( $this->subtotal, $this->menos_egresos_periodo );


        // dd( $this->total_ingresos_periodo );
        // dd( $this->total_periodo[0]->total_ingresos );
        // total_periodo_egresos
        
        return view('exports.informe-economico', [
            'ingresos'                  =>  $this->ingresos,
            'ingresos_meses'            =>  $this->ingresos_meses,
            'total_periodo'             =>  $this->total_periodo[0]->total_ingresos,
            'total_periodo_egresos'     =>  $this->total_periodo_egresos[0]->total_egresos,
            'tipo_ingreso_mes'          =>  $this->tipo_ingreso_mes,
            'egresos'                   =>  $this->egresos,
            'egresos_meses'             =>  $this->egresos_meses,
            'tipo_egreso_mes'           =>  $this->tipo_egreso_mes,
            'total_ingresos_periodo'    =>  $this->total_ingresos_periodo,
            'saldo_ejercicio_anterior'  =>  $this->saldo_ejercicio_anterior,
            'subtotal'                  =>  $this->subtotal,
            'menos_egresos_periodo'     =>  $this->menos_egresos_periodo,
            'saldo_ejercicio_siguiente' =>  $this->saldo_ejercicio_siguiente
        ]);
    }
}
