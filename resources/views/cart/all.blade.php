<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($items as $item)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/'. $item->image) }}" alt="image" class="w-20 h-20 object-cover rounded-lg">
                            <div class="ml-4">
                                <h2 class="text-lg font-semibold">{{ $item->name }}</h2>
                                <p class="text-sm text-gray-500">{{ $item->description }}</p>
                            </div>
                        </div>
                        <div class="flex items
                        -center">
                            <p class="text-lg font-semibold">{{ $item->price }}</p>
                            <form action="/cart/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-4 text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-600">
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>


                    @endforeach


                    <form action="/checkout" method="POST">
                        @csrf
                        <button type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white bg-[#FF2D20] rounded-lg shadow-[0px 4px 34px rgba(0,0,0,0.06)] transition hover:bg-[#FF2D20] dark:bg-[#FF2D20] dark:hover:bg-[#FF2D20]">
                            checkout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>