
<x-slot name="form">

    <!-- titulo -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="titulo" value="{{ __('Título') }}" />
        <x-jet-input id="titulo" type="text" class="mt-1 block w-full" wire:model.defer="titulo" autocomplete="titulo"
            placeholder="agregar título tipo ingreso" />
        <x-jet-input-error for="titulo" class="mt-2" />
    </div>

    <!-- descripcion -->
    <div class="col-span-6 sm:col-span-1">
        <x-jet-label for="descripcion" value="{{ __('Descripción') }}" />
        <textarea
            placeholder="Descripción tipo ingreso aquí..."
            class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            wire:model.defer="descripcion" cols="4" rows="2">
        </textarea>
        <x-jet-input-error for="descripcion" class="mt-2" />
    </div>
    
</x-slot>
