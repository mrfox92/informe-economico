<x-jet-form-section submit="store">

    <x-slot name="title">
        {{ __( 'Informe económico' ) }}
    </x-slot>

    <x-slot name="description">
        {{ __( 'Generar informe económico' ) }}
    </x-slot>

    {{-- cuerpo formulario --}}

    <div class="container">
        @include('livewire.reportes.form-ingreso')
    </div>

    {{-- cuerpo formulario --}}

    <x-slot name="actions">

        <x-jet-button wire:loading.attr="disabled" wire:target="store">
            {{ __('Generar documento') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>