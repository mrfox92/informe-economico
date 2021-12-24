<?php

namespace App\Http\Controllers;

use App\Exports\InformeEconomicoExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InformeEconomicoController extends Controller
{
    public $exportable;
    public function __construct(){}
    
    public function exportExcel( Request $request )
    {
        //  TODO: nombre dinámico informe economico

        $init_month = $request->input('init_month');
        $init_year = $request->input('init_year');
        $limit_month = $request->input('limit_month');
        $limit_year = $request->input('limit_year');

        $from = '01-' . $init_month . '-' . $init_year;
        $to = '01-' . $limit_month . '-' . $limit_year;

        $init_month_date = Carbon::createFromFormat('d-m-Y', $from)->startOfMonth();
        $limit_month_date = Carbon::createFromFormat('d-m-Y', $to)->endOfMonth();
   
        $init_month_name = __( $init_month_date->format('F') );
        $limit_month_name = __( $limit_month_date->format('F') );

        $nombre_informe_economico = 'informe-economico-desde-'. $init_month_name .'-'. $init_year . '-a-'. $limit_month_name .'-'. $limit_year;
        //  to uppercase
        $nombre_informe_economico = strtoupper( $nombre_informe_economico );
        //  formato excel
        $nombre_informe_economico .= '.xlsx';

        $this->exportable = new InformeEconomicoExport($request->input());
        return Excel::download( $this->exportable, $nombre_informe_economico);
    }
}
