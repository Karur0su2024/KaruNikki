<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="card p-4">
            <!-- Icon Image -->
            <img class="mx-auto shadow-md w-32 h-32" src="{{ $entry->icon }}" alt="Icon">

            <!-- Date Heading -->
            <h1 class="text-center my-6 text-3xl font-bold text-gray-800">
                {{ $entry->date }}
            </h1>

            <livewire:components.daily-entry-content :entry="$entry" />
        </div>

    </div>
</x-app-layout>
