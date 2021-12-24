{{-- ingresos --}}
<table class="table">
    <thead>
        <tr>
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
                <td data-format="0">
                    {{ number_format($mes->totales, 0, '', '') }}
                </td>
                <td>{{ $mes->tipoIngreso->titulo }}</td>

                @foreach ($tipo_ingreso_mes as $item)

                    @if ($item->tipo_ingreso_id === $mes->tipo_ingreso_id)

                        <td data-format="0">
                            {{ number_format($item->monto, 0, '', '') }}
                        </td>
                    @endif

                @endforeach
            </tr>
            
        @endforeach

        <tr>
            <td data-format="0">

                @if (isset($total_periodo) && !empty($total_periodo))
                    {{  number_format($total_periodo, 0, '', '') }}
                @else
                    &nbsp;
                @endif
            </td>
            <td><strong>Ingreso Neto</strong></td>

            @foreach ($ingresos as $ingreso)
                <td data-format="0">
                    {{
                        number_format($ingreso->ingreso_neto, 0, '', '')
                    }}
                </td>
            @endforeach
        </tr>

    </tbody>
</table>


{{-- egresos --}}

<table class="table">
    <thead>
        <tr>
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
                <td data-format="0">
                    {{
                        number_format($mes->totales, 0, '', '')
                    }}
                </td>
                <td>{{ $mes->tipoEgreso->titulo }}</td>

                @foreach ($tipo_egreso_mes as $item)

                    @if ($item->tipo_egreso_id === $mes->tipo_egreso_id)

                        <td data-format="0">
                            {{
                                number_format($item->monto, 0, '', '')
                            }}
                        </td>
                    @endif

                @endforeach
            </tr>
        @endforeach

        <tr>

            <td data-format="0">
                @if (isset($total_periodo_egresos) && !empty($total_periodo_egresos))
                    {{
                        number_format($total_periodo_egresos, 0, '', '')
                    }}
                @else
                    &nbsp;
                @endif
            </td>

            <td><strong>Total Egreso</strong></td>

            @foreach ($egresos as $egreso)
                <td data-format="0">
                    {{
                        number_format($egreso->egreso_neto, 0, '', '')
                    }}
                    
                </td>
            @endforeach

        </tr>

    </tbody>
</table>


{{-- resumen anual --}}

<table class="table">
    <thead>
        <tr>
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
            <td data-format="0">
                {{ number_format($total_ingresos_periodo, 0, '', '') }}
            </td>
            <td data-format="0">
                {{ number_format($saldo_ejercicio_anterior, 0, '', '') }}
            </td>
            <td data-format="0">
                {{ number_format($subtotal, 0, '', '') }}
            </td>
            <td data-format="0">
                {{ number_format($menos_egresos_periodo, 0, '', '') }}
            </td>
            <td data-format="0">
                {{ number_format($saldo_ejercicio_siguiente, 0, '', '') }}
            </td>
        </tr>

    </tbody>
</table>


