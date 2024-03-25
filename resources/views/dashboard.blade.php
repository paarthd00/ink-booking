<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl">Artists</h2>
                    <form action="/checkout" method="POST">
                        @csrf
                        <button type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white bg-[#FF2D20] rounded-lg shadow-[0px 4px 34px rgba(0,0,0,0.06)] transition hover:bg-[#FF2D20] dark:bg-[#FF2D20] dark:hover:bg-[#FF2D20]">
                            Buy Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
