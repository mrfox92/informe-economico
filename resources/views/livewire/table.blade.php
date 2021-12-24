
<div class="flex flex-col">
    {{-- table --}}
    <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

        <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8 mt-5">

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                
                <table class="w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo ingreso
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Monto
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Fecha ingreso
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Eliminar</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($ingresos as $ingreso)

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <strong>
                                            {{ $ingreso->id }}
                                        </strong>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $ingreso->tipoIngreso->titulo }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-green-500">
                                        {{ number_format($ingreso->monto, 0, ',', '.') }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ \Carbon\Carbon::parse($ingreso->fecha_ingreso)->format('d/m/Y') }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <x-jet-button wire:click="edit({{ $ingreso->id }})">
                                        <i class="fas fa-edit"></i> <span class="ml-1">Editar</span>
                                    </x-jet-button>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <x-jet-button wire:click="$emit('deleteIngreso', {{ $ingreso->id }})">
                                        <i class="fas fa-trash-alt"></i> <span class="ml-1">Eliminar</span>
                                    </x-jet-button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- pagination --}}
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{ $ingresos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>



@push('script')
    <script>
        Livewire.on('deleteIngreso', ingresoId => {
            Swal.fire({
                title: '¿Estás seguro que deseas eliminar este ingreso?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {

                if (result.isConfirmed) {
                    Livewire.emitTo('ingreso-component', 'delete', ingresoId);

                    //  mostramos mensaje
                    Swal.fire(
                        'Eliminado!',
                        'El ingreso ha sido eliminado con éxito',
                        'success'
                    );
                }
            })
        });
    </script>
@endpush
