
<x-slot name="form">

    <!-- tipo egreso -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="tipo_egreso_id" value="{{ __('Seleccione tipo egreso') }}" />
        <select
            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example"
            wire:model.defer="tipo_egreso_id"
        >
            <option value="" selected>Seleccione tipo egreso</option>
            @foreach ($tipo_egresos as $tipo_egreso)
                <option value="{{ $tipo_egreso->id }}">{{ $tipo_egreso->titulo }}</option>
            @endforeach
        </select>
        <x-jet-input-error for="tipo_egreso_id" class="mt-2" />
    </div>
    
    <!-- Monto -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="monto" value="{{ __('Monto') }}" />
        <x-jet-input id="monto" type="number" step="off" class="mt-1 block w-full" wire:model.defer="monto" autocomplete="monto"
            placeholder="agregar monto egreso" />
        <x-jet-input-error for="monto" class="mt-2" />
    </div>

    <!-- Fecha egreso -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="fecha_egreso" value="{{ __('Fecha egreso') }}" />
        <x-jet-input id="fecha_egreso" type="date" class="mt-1 block w-full" wire:model.defer="fecha_egreso" autocomplete="fecha_egreso"
            placeholder="agregar monto egreso" />
        <x-jet-input-error for="fecha_egreso" class="mt-2" />
    </div>
    
</x-slot>
