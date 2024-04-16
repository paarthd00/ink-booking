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
                    <img width="200" class="text-white" src="{{ asset('storage/'.$art->image) }}" alt="{{ $art->name }}">
                    <div class="card-body">
                        <h2 class="text-white">{{ $art->name }}</h2>
                        <p class="text-white">{{ $art->price }}</p>
                        <form action="/checkout" method="POST">
                            @csrf
                            <input type="hidden" name="art_id" value="{{ $art->id }}">
                            <input type="hidden" name="price" value="{{ $art->price }}">
                            <input type="hidden" name="name" value="{{ $art->name }}">
                            <button type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white bg-[#FF2D20] rounded-lg shadow-[0px 4px 34px rgba(0,0,0,0.06)] transition hover:bg-[#FF2D20] dark:bg-[#FF2D20] dark:hover:bg-[#FF2D20]">
                                Add To Cart
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>