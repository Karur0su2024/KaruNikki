<x-app-layout>
    <a href="{{ route('daily-entry-form') }}" class="btn btn-primary">Add new entry</a>

    <div class="row mt-5">
        @foreach ($entries as $entry)
            <div class="card p-0" style="width: 18rem;">
                <img src="{{ $entry->icon }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $entry->date }}</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
