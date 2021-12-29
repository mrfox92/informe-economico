{{-- Tabla ingresos comienzo --}}
@if ( isset( $ingresos ) && !empty( $ingresos ) && isset( $ingresos_meses ) && !empty( $ingresos_meses ) && isset( $tipo_ingreso_mes ) && !empty( $tipo_ingreso_mes ) )
    
<section class="antialiased bg-gray-100 text-gray-600 h-screen px-4 mt-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800 uppercase">Ingreso</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">
                                        Totales
                                    </div>
                                </th>
                                <th>Especificaciones</th>
                                {{-- <th>Totales</th> --}}

                                @foreach ($ingresos as $ingreso)

                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">
                                            {{
                                                __(Carbon\Carbon::create(0, $ingreso->monthKey)->format('F'))
                                            }}
                                        </div>
                                    </th>
                                @endforeach

                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">

                            <tr>
                                @foreach ($ingresos_meses as $mes)

                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">
                                                {{
                                                    number_format($mes->totales, 0, ',', '.')
                                                }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $mes->tipoIngreso->titulo }}</td>

                                    @foreach ($tipo_ingreso_mes as $item)

                                        @if ($item->tipo_ingreso_id === $mes->tipo_ingreso_id)

                                            <td class="p-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="font-medium text-green-500">
                                                        {{                                                     number_format($item->monto, 0, ',', '.') }}
                                                    </div>
                                                </div>
                                            </td>
                                        @endif

                                    @endforeach
                                </tr>
                            @endforeach
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="font-medium text-gray-800">

                                        @if (isset($total_periodo[0]->total_ingresos) && !empty($total_periodo[0]->total_ingresos))
                                            {{
                                                number_format($total_periodo[0]->total_ingresos, 0, ',', '.')
                                            }}
                                        @else
                                            &nbsp;
                                        @endif

                                    </div>
                                </div>
                            </td>
                            <td><strong>Ingreso Neto</strong></td>


                            @foreach ($ingresos as $ingreso)
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-green-800">
                                            {{
                                                number_format($ingreso->ingreso_neto, 0, ',', '.')
                                            }}
                                        </div>
                                    </div>
                                </td>
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endif
{{-- Tabla ingresos fin --}}

@if ( isset( $egresos ) && !empty( $egresos ) && isset( $egresos_meses ) && !empty( $egresos_meses ) && isset( $tipo_egreso_mes ) && !empty( $tipo_egreso_mes ) )

{{-- Tabla egresos comienzo --}}
<section class="antialiased bg-gray-100 text-gray-600 h-screen px-4 mt-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800 uppercase">Egresos</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">
                                        Totales
                                    </div>
                                </th>
                                <th>Especificaciones</th>
                                {{-- <th>Totales</th> --}}

                                @foreach ($egresos as $egreso)

                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">
                                            {{ __(Carbon\Carbon::create(0, $egreso->monthKey)->format('F')) }}
                                        </div>
                                    </th>
                                @endforeach

                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">

                            <tr>
                                @foreach ($egresos_meses as $mes)

                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">
                                            {{                                             number_format($mes->totales, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $mes->tipoEgreso->titulo }}</td>

                                @foreach ($tipo_egreso_mes as $item)

                                    @if ($item->tipo_egreso_id === $mes->tipo_egreso_id)

                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-green-500">
                                                    {{                                                     number_format($item->monto, 0, ',', '.') }}
                                                </div>
                                            </div>
                                        </td>
                                    @endif

                                @endforeach
                            </tr>
                            @endforeach
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="font-medium text-gray-800">

                                        @if (isset($total_periodo_egresos[0]->total_egresos) && !empty($total_periodo_egresos[0]->total_egresos))
                                            {{                                             number_format($total_periodo_egresos[0]->total_egresos, 0, ',', '.') }}
                                        @else
                                            &nbsp;
                                        @endif

                                    </div>
                                </div>
                            </td>
                            <td><strong>Total Egreso</strong></td>


                            @foreach ($egresos as $egreso)
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-green-800">
                                            {{                                             number_format($egreso->egreso_neto, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
{{-- Tabla egresos fin --}}
@endif

{{-- Tabla Resumen anual inicio --}}
@if ( isset( $ingresos ) && !empty( $ingresos ) && isset( $egresos ) && !empty( $egresos ) )
    
<section class="antialiased bg-gray-100 text-gray-600 h-screen px-4 mt-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800 uppercase">Resumen Anual</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">
                                        Total ingresos
                                    </div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">
                                        Saldo Ejercicio Anterior
                                    </div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">
                                        Subtotal
                                    </div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">
                                        Menos Egresos Periodo
                                    </div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">
                                        Saldo Ejercicio Siguiente
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">

                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">
                                            {{ number_format($total_ingresos_periodo, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">
                                            {{ number_format($saldo_ejercicio_anterior, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">
                                            {{ number_format($subtotal, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">
                                            {{ number_format($menos_egresos_periodo, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">
                                            {{ number_format($saldo_ejercicio_siguiente, 0, ',', '.') }}
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endif


{{-- Tabla Resumen anual fin --}}
@if ( isset( $init_month ) && isset( $init_year ) && isset( $limit_month ) && isset( $limit_year ) && isset( $ingresos ) && !empty( $ingresos ) && isset( $egresos ) && !empty( $egresos ) )

<div class="flex flex-col">
    <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

        <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8 mt-5">

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <header class="px-5 py-4 border-b border-gray-100 flex justify-between">
                        <h2 class="font-semibold text-gray-800 uppercase">Exportar datos excel</h2>

                        {{-- <x-jet-nav-link href="{{ route('informe.export') }}">
                            <i class="fas fa-file-excel mr-2"></i> Exportar a excel
                        </x-jet-nav-link> --}}

                        <form action="{{ route('informe.export') }}" method="POST">
                            @csrf
                            <input type="hidden" name="init_month" value="{{ $init_month }}">
                            <input type="hidden" name="init_year" value="{{ $init_year }}">
                            <input type="hidden" name="limit_month" value="{{ $limit_month }}">
                            <input type="hidden" name="limit_year" value="{{ $limit_year }}">

                            <x-jet-button type="submit">
                                <i class="fas fa-file-excel"></i>
                                <span class="ml-1">{{ __('Generar reporte excel') }}</span>
                            </x-jet-button>

                        </form>

                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endif


{{-- Tabla Resumen anual fin --}}
@if ( isset( $init_month ) && isset( $init_year ) && isset( $limit_month ) && isset( $limit_year ) && isset( $ingresos ) && !empty( $ingresos ) && isset( $egresos ) && !empty( $egresos ) )

<div class="flex flex-col">
    <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

        <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8 mt-5">

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <header class="px-5 py-4 border-b border-gray-100 flex justify-between">
                        <h2 class="font-semibold text-gray-800 uppercase">Exportar datos PDF</h2>

                        {{-- <x-jet-nav-link href="{{ route('informe.export') }}">
                            <i class="fas fa-file-excel mr-2"></i> Exportar a excel
                        </x-jet-nav-link> --}}

                        <form action="{{ route('informe.pdf') }}" method="POST">
                            @csrf
                            <input type="hidden" name="init_month" value="{{ $init_month }}">
                            <input type="hidden" name="init_year" value="{{ $init_year }}">
                            <input type="hidden" name="limit_month" value="{{ $limit_month }}">
                            <input type="hidden" name="limit_year" value="{{ $limit_year }}">
                            <x-jet-button type="submit">
                                <i class="fas fa-file-pdf"></i>
                                <span class="ml-1">{{ __('Generar reporte PDF') }}</span>
                            </x-jet-button>
                        </form>

                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endif

