<section class="antialiased bg-gray-100 text-gray-600 h-screen px-4 mt-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Egresos</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">ID</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Tipo egreso</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Monto</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Fecha egreso</div>
                                </th>
                                <th colspan="2" class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Acciones</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">

                            @foreach ($egresos as $egreso)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">{{ $egreso->id }}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $egreso->tipoEgreso->titulo }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">
                                            {{ number_format($egreso->monto, 0, ',', '.') }}
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">
                                            {{ \Carbon\Carbon::parse($egreso->fecha_egreso)->format('d/m/Y') }}
                                        </div>
                                    </td>
                                    <td>
                                        <x-jet-button wire:click="edit({{ $egreso->id }})"><i class="fas fa-edit"></i></x-jet-button>
                                    </td>
                                    <td>
                                        {{-- <x-jet-button wire:click="destroy({{ $egreso->id }})"><i class="fas fa-trash-alt"></i></x-jet-button> --}}
                                        <x-jet-button wire:click="$emit('deleteEgreso', {{ $egreso->id }})"><i class="fas fa-trash-alt"></i></x-jet-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {{-- pagination --}}
                    {{ $egresos->links() }}
                </div>
            </div>
        </div>

    </div>
</section>
{{-- Tabla Tailwind CSS --}}


@push('script')
    <script>
        Livewire.on('deleteEgreso', egresoId => {
            Swal.fire({
                title: '??Est??s seguro que deseas eliminar este egreso?',
                text: "??No podr??s revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar',
                cancelButtonText: 'Cancelar',
            }).then( (result) => {

                if ( result.isConfirmed ) {
                    Livewire.emitTo('egreso-component', 'delete', egresoId);

                    //  mostramos mensaje
                    Swal.fire(
                        'Eliminado!',
                        'El egreso ha sido eliminado con ??xito',
                        'success'
                    );
                }
            })
        });

    </script>
@endpush
