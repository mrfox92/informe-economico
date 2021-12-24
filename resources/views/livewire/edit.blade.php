<x-jet-form-section submit="update">

    <x-slot name="title">
        {{ __( $title ) }}
    </x-slot>

    <x-slot name="description">
        {{ __( $description ) }}
    </x-slot>

    {{-- cuerpo formulario --}}

    <div class="container">
        @include('livewire.form')
    </div>

    {{-- cuerpo formulario --}}

    <x-slot name="actions">

        {{-- notificaciones - escucha el evento emitido --}}
        <x-jet-action-message class="mr-3 text-greenLime-500" on="saved">
            <i class="fas fa-check"></i> Guardado con éxito
        </x-jet-action-message>

        <x-jet-button type="submit" wire:loading.attr="disabled" wire:target="update">
            {{ __('Actualizar') }}
        </x-jet-button>

        <x-jet-button type="button" wire:click="default()">
            {{ __('Cancelar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>





{{-- <button class="btn btn-primary">
    Guardar
</button> --}}