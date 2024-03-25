<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Arts') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap">
                <!-- loop over artist -->
                @foreach($arts as $art)
                <div class="card p-6">
                    <img class="text-white" src="{{ asset('storage/'.$art->image) }}" alt="{{ $art->name }}">
                    <div class="card-body">
                        <h2 class="text-white">{{ $art->name }}</h2>
                        <p class="text-white">{{ $art->price }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>






