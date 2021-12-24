
<x-slot name="form">
    {{-- formulario --}}

    <!-- tipo ingreso -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="tipo_ingreso_id" value="{{ __('Seleccione tipo ingreso') }}" />
        <select
            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example"
            wire:model.defer="tipo_ingreso_id"
        >
            <option value="" selected>Seleccione tipo ingreso</option>
            @foreach ($tipo_ingresos as $tipo_ingreso)
                <option value="{{ $tipo_ingreso->id }}">{{ $tipo_ingreso->titulo }}</option>
            @endforeach
        </select>
        <x-jet-input-error for="tipo_ingreso_id" class="mt-2" />
    </div>

    <!-- Name -->
    {{-- <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="titulo" value="{{ __('Título') }}" />
        <x-jet-input id="titulo" type="text" class="mt-1 block w-full" wire:model.defer="titulo" autocomplete="titulo"
            placeholder="agregar título ingreso" />
        <x-jet-input-error for="titulo" class="mt-2" />
    </div> --}}

    {{-- <x-jet-input id="descripcion" type="text" class="mt-1 block w-full" wire:model.defer="descripcion"
        autocomplete="descripcion" placeholder="agregar descripción ingreso" /> --}}

    {{-- <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="descripcion" value="{{ __('Descripción') }}" />
        <textarea
            placeholder="Descripción ingreso aquí..."
            class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            wire:model.defer="descripcion" cols="4" rows="2">
        </textarea>
        <x-jet-input-error for="descripcion" class="mt-2" />
    </div> --}}
    
    <!-- Monto -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="monto" value="{{ __('Monto') }}" />
        <x-jet-input id="monto" type="number" step="off" class="mt-1 block w-full" wire:model.defer="monto" autocomplete="monto"
            placeholder="agregar monto ingreso" />
        <x-jet-input-error for="monto" class="mt-2" />
    </div>

    <!-- Fecha ingreso -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="fecha_ingreso" value="{{ __('Fecha Ingreso') }}" />
        <x-jet-input id="fecha_ingreso" type="date" class="mt-1 block w-full" wire:model.defer="fecha_ingreso" autocomplete="fecha_ingreso"
            placeholder="agregar monto ingreso" />
        <x-jet-input-error for="fecha_ingreso" class="mt-2" />
    </div>
    
</x-slot>
