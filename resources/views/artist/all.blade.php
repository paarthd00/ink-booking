<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Artists') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap">
                <!-- loop over artist -->
                @foreach($artists as $artist)
                <div class="card p-6">
                    <img class="text-white" src="{{ asset('storage/'.$artist->image) }}" alt="{{ $artist->name }}">
                    <div class="card-body">
                        <h2 class="text-white">{{ $artist->name }}</h2>
                        <p class="text-white">{{ $artist->bio }}</p>
                        <p class="text-white">{{ $artist->price }}</p>
                        <a class="text-white" href="mailto:{{ $artist->email }}">{{ $artist->email }}</a>
                        <br>
                        <a class="text-white" href="tel:{{ $artist->phone }}">{{ $artist->phone }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>





