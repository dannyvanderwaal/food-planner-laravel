<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-text-950 dark:text-text-950 leading-tight">
            {{ __('Create Shop') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-background-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-text-950">
                    <form method="POST" action="{{ route('shops.store') }}">
                        @csrf
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">

                        <!-- Add fields for other shop attributes -->

                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>>
