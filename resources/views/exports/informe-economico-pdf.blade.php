<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <style>
        html, body {
            font-size: 10px;
        }
    </style>

    <small class="text-left text-uppercase">
        <strong>
            Iglesia pentecostal chile austral, máfil
        </strong>
    </small>

    <div class="jumbotron my-4 py-3">
        <h6 class="text-center text-uppercase">
            {{ $titulo }}
        </h6>
    </div>
    {{-- tabla ingresos --}}
    <table class="table table-hover table-striped table-bordered mb-2">
        <thead class="thead-dark">
            <tr class="text-uppercase">
                <th>
                    Totales
                </th>
                <th>Especificaciones</th>
    
                @foreach ($ingresos as $ingreso)
    
                    <th>
                        {{
                            __(Carbon\Carbon::create(0, $ingreso->monthKey)->format('F'))
                        }}
                    </th>
                @endforeach
    
            </tr>
        </thead>
        <tbody>
    
            @foreach ($ingresos_meses as $mes)
    
                <tr>
                    <td>
                        {{ number_format($mes->totales, 0, ',', '.') }}
                    </td>
                    <td>{{ $mes->tipoIngreso->titulo }}</td>
    
                    @foreach ($tipo_ingreso_mes as $item)
    
                        @if ($item->tipo_ingreso_id === $mes->tipo_ingreso_id)
    
                            <td>
                                {{ number_format($item->monto, 0, ',', '.') }}
                            </td>
                        @endif
    
                    @endforeach
                </tr>
                
            @endforeach
    
            <tr>
                <td>
    
                    @if (isset($total_periodo) && !empty($total_periodo))
                        <strong>
                            {{  number_format($total_periodo, 0, ',', '.') }}
                        </strong>
                    @else
                        &nbsp;
                    @endif
                </td>
                <td class="text-uppercase"><strong>Ingreso Neto</strong></td>
    
                @foreach ($ingresos as $ingreso)
                    <td>
                        <strong>
                            {{
                                number_format($ingreso->ingreso_neto, 0, ',', '.')
                            }}
                        </strong>
                    </td>
                @endforeach
            </tr>
    
        </tbody>
    </table>
    {{-- tabla egresos --}}
    <table class="table table-hover table-striped table-bordered">
        <thead class="thead-dark">
            <tr class="text-uppercase">
                <th>
                    Totales
                </th>
                <th>Especificaciones</th>
    
                @foreach ($egresos as $egreso)
    
                    <th>
                        {{
                            __(Carbon\Carbon::create(0, $egreso->monthKey)->format('F'))
                        }}
                    </th>
                @endforeach
    
            </tr>
        </thead>
        <tbody>
    
            @foreach ($egresos_meses as $mes)
    
                <tr>
                    <td>
                        {{
                            number_format($mes->totales, 0, ',', '.')
                        }}
                    </td>
                    <td>{{ $mes->tipoEgreso->titulo }}</td>
    
                    @foreach ($tipo_egreso_mes as $item)
    
                        @if ($item->tipo_egreso_id === $mes->tipo_egreso_id)
    
                            <td>
                                {{
                                    number_format($item->monto, 0, ',', '.')
                                }}
                            </td>
                        @endif
    
                    @endforeach
                </tr>
            @endforeach
    
            <tr>
    
                <td>
                    @if (isset($total_periodo_egresos) && !empty($total_periodo_egresos))
                        <strong>
                            {{
                                number_format($total_periodo_egresos, 0, ',', '.')
                            }}
                        </strong>
                    @else
                        &nbsp;
                    @endif
                </td>
    
                <td class="text-uppercase"><strong>Total Egreso</strong></td>
    
                @foreach ($egresos as $egreso)
                    <td>
                        <strong>
                            {{
                                number_format($egreso->egreso_neto, 0, ',', '.')
                            }}
                        </strong>
                    </td>
                @endforeach
    
            </tr>
    
        </tbody>
    </table>

    <h6 class="text-left text-uppercase">
        {{ $titulo_pie_informe }}
        
        {{-- encargado --}}
    </h6>
    {{-- tabla resumen anual --}}
    <table class="table table-hover table-striped table-bordered">
        <thead class="thead-dark">
            <tr class="text-uppercase">
                <th>
                    Total ingresos
                </th>
                <th>
                    Saldo Ejercicio Anterior
                </th>
                <th>
                    Subtotal
                </th>
                <th>
                    Menos Egresos Periodo
                </th>
                <th>
                    Saldo Ejercicio Siguiente
                </th>
            </tr>
        </thead>
        <tbody>
    
            <tr>
                <td>
                    {{ number_format($total_ingresos_periodo, 0, ',', '.') }}
                </td>
                <td>
                    {{ number_format($saldo_ejercicio_anterior, 0, ',', '.') }}
                </td>
                <td>
                    {{ number_format($subtotal, 0, ',', '.') }}
                </td>
                <td>
                    {{ number_format($menos_egresos_periodo, 0, ',', '.') }}
                </td>
                <td>
                    {{ number_format($saldo_ejercicio_siguiente, 0, ',', '.') }}
                </td>
            </tr>
    
        </tbody>
    </table>

    <h6 class="text-center text-uppercase mt-2">
        {{ $encargado }}
        <br>
        {{ $cargo }}
    </h6>
</body>
</html>