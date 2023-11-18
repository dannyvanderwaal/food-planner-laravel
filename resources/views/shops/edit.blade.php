<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-text-950 dark:text-text-950 leading-tight">
            {{ __('Edit Shop') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-background-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-text-950">
                    <form method="POST" action="{{ route('shops.update', $shop->uuid) }}">
                        @csrf
                        @method('PUT')
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $shop->name }}">
                        <label for="latitude">Latitude:</label>
                        <input type="text" id="latitude" name="latitude" value="{{ $shop->latitude }}">
                        <label for="longitude">Longitude:</label>
                        <input type="text" id="longitude" name="longitude" value="{{ $shop->longitude }}">

                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
