<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>

    <body>

        <main class="mt-6">
            <h2 class="text-xl">Artists</h2>
            <form action="/checkout" method="POST">
                @csrf
                <button type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white bg-[#FF2D20] rounded-lg shadow-[0px 4px 34px rgba(0,0,0,0.06)] transition hover:bg-[#FF2D20] dark:bg-[#FF2D20] dark:hover:bg-[#FF2D20]">
                    Buy Now
                </button>
            </form>
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            INK SHOP@2024
        </footer>
    </body>

</html>
