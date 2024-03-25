<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Artist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl">New Artist</h2>
                    <form action="/add-artist" method="POST">
                        @csrf
                        <div class="mt-6">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                            <input type="text" name="name" id="name" class="block w-full px-4 py-3 mt-1 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-[#FF2D20] focus:border-[#FF2D20] sm:text-sm" required>
                        </div>
                        <div class="mt-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                            <input type="email" name="email" id="email" class="block w-full px-4 py-3 mt-1 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-[#FF2D20] focus:border-[#FF2D20] sm:text-sm" required>
                        </div>
                        <div class="mt-6">
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Phone</label>
                            <input type="tel" name="phone" id="phone" class="block w-full px-4 py-3 mt-1 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-[#FF2D20] focus:border-[#FF2D20] sm:text-sm" required>
                        </div>

                        <div class="mt-6">
                            <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Bio</label>
                            <textarea name="bio" id="bio" class="block w-full px-4 py-3 mt-1 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-[#FF2D20] focus:border-[#FF2D20] sm:text-sm" required></textarea>
                        </div>

                        <div class="mt-6">
                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Image</label>
                            <input type="file" name="image" id="image" class="block w-full px-4 py-3 mt-1 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-[#FF2D20] focus:border-[#FF2D20] sm:text-sm" required>
                        </div>

                        <div class="mt-6">
                            <label for="style" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Style</label>
                            <input type="text" name="style" id="style" class="block w-full px-4 py-3 mt-1 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-[#FF2D20] focus:border-[#FF2D20] sm:text-sm" required>
                        </div>

                        <div class="mt-6">
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Price</label>
                            <input type="number" name="price" id="price" class="block w-full px-4 py-3 mt-1 text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-[#FF2D20] focus:border-[#FF2D20] sm:text-sm" required>
                        </div>

                        <button type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white bg-[#FF2D20] rounded-lg shadow-[0px 4px 34px rgba(0,0,0,0.06)] transition hover:bg-[#FF2D20] dark:bg-[#FF2D20] dark:hover:bg-[#FF2D20]">
                            Add Artist
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

