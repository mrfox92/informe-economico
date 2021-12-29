<x-jet-form-section submit="store">

    <x-slot name="title">
        {{ __( $title ) }}
    </x-slot>

    <x-slot name="description">
        {{ __( $description ) }}
    </x-slot>

    {{-- cuerpo formulario --}}

    <div class="container">
        @include('livewire.tipos.tipo-egreso-form')
    </div>

    {{-- cuerpo formulario --}}

    <x-slot name="actions">

        {{-- notificaciones - escucha el evento emitido --}}
        <x-jet-action-message class="mr-3 text-greenLime-500" on="saved">
            <i class="fas fa-check"></i> Guardado con éxito
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="store">
            {{ __('Guardar') }}
        </x-jet-button>

    </x-slot>

</x-jet-form-section>
