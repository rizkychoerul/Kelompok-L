<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Leaflet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-wrap gap-4 p-4 text-gray-900">
                    {{-- card --}}
                    @include('components.card.card-leaflet')
                    {{-- end card --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>