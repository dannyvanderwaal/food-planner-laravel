<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-text-950 dark:text-text-950 leading-tight">
            {{ $shop->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-background-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-text-950">
                    <p>ID: {{ $shop->uuid }}</p>
                    <p>Name: {{ $shop->name }}</p>
                    <p>Latitude: {{ $shop->latitude }}</p>
                    <p>Longitude: {{ $shop->longitude }}</p>

                    <a href="{{ route('shops.edit', $shop->uuid) }}">Edit</a>
                    <form method="POST" action="{{ route('shops.destroy', $shop->uuid) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
