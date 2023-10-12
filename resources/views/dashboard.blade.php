<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{--  ASÍ SE LLAMA A UN COMPONENTE DE JETSTREAM-LIVEWIRE  --}}
            <x-welcome></x-welcome>

            {{-- ASÏ SE LLAMAN A NUESTROS COMPONENTES
                @php
                $type = 'info';
                @endphp
                <x-alert2 :type="$type">
                    <x-slot name="title">
                        Mira que te lo digo!!
                    </x-slot>
                    <p>EL FIN DEL MUNDO SE APROXIMA!!!</p>
                </x-alert2>
                --}}

        </div>
    </div>
</x-app-layout>
