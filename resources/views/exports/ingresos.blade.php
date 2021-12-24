<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo Ingreso</th>
            <th scope="col">Monto</th>
            <th scope="col">Fecha Ingreso</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ingresos as $ingreso)

            <tr>
                <th scope="row">{{ $ingreso->id }}</th>
                <td>{{ $ingreso->tipoIngreso->titulo }}</td>
                <td data-format="0">{{ number_format($ingreso->monto, 0, '', '') }}</td>
                <td>{{ \Carbon\Carbon::parse($ingreso->fecha_ingreso)->format('d/m/Y') }}</td>
            </tr>
        @endforeach

    </tbody>
</table>

