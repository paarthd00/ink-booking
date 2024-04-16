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
                    <h2 class="text-white text-xl pb-2">{{ $art->name }}</h2>
                    <p class="text-white pb-4">{{ $art->description }}</p>
                    <p class="text-white pb-4">${{ $art->price }}</p>

                    <img class="rounded" width="200" class="text-white" src="{{ asset('storage/'.$art->image) }}" alt="{{ $art->name }}">
                    <div class="card-body">
                        <form action="/addtocart" method="POST">
                            @csrf
                            <input type="hidden" name="art_items_id" value="{{ $art->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button style="background-color: rgb(17,17,17);" type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white rounded-lg">
                                Add to Bag
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>