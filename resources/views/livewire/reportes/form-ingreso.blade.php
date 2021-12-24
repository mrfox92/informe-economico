<x-slot name="form">

    <!-- Mes inicio periodo -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="init_month" value="{{ __('Mes inicio Periodo') }}" />
        <select
            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example"
            wire:model.defer="init_month"
        >
            <option value="" selected>Seleccione un mes</option>
            <option value="1">enero</option>
            <option value="2">febrero</option>
            <option value="3">marzo</option>
            <option value="4">abril</option>
            <option value="5">mayo</option>
            <option value="6">junio</option>
            <option value="7">julio</option>
            <option value="8">agosto</option>
            <option value="9">septiembre</option>
            <option value="10">octubre</option>
            <option value="11">noviembre</option>
            <option value="12">diciembre</option>
        </select>
        <x-jet-input-error for="init_month" class="mt-2" />
    </div>

    <!-- Año inicial -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="init_year" value="{{ __('Año inicio Periodo') }}" />
        <x-jet-input id="init_year" type="number" step="off" class="mt-1 block w-full" wire:model.defer="init_year"
            autocomplete="init_year" placeholder="ingrese año desde" />
        <x-jet-input-error for="init_year" class="mt-2" />
    </div>

    <!-- Mes fin periodo -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="limit_month" value="{{ __('Mes fin Periodo') }}" />
        <select
            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example"
            wire:model.defer="limit_month"
        >
            <option value="" selected>Seleccione un mes</option>
            <option value="1">enero</option>
            <option value="2">febrero</option>
            <option value="3">marzo</option>
            <option value="4">abril</option>
            <option value="5">mayo</option>
            <option value="6">junio</option>
            <option value="7">julio</option>
            <option value="8">agosto</option>
            <option value="9">septiembre</option>
            <option value="10">octubre</option>
            <option value="11">noviembre</option>
            <option value="12">diciembre</option>
        </select>
        <x-jet-input-error for="limit_month" class="mt-2" />
    </div>

    <!-- Año inicial -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="limit_year" value="{{ __('Año Hasta') }}" />
        <x-jet-input id="limit_year" type="number" step="off" class="mt-1 block w-full" wire:model.defer="limit_year"
            autocomplete="limit_year" placeholder="ingrese año hasta" />
        <x-jet-input-error for="limit_year" class="mt-2" />
    </div>


</x-slot>
