<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookify</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex min-h-screen flex-col">
    <nav>
        <div class="bg-slate-800 text-white p-4">
            <div class="mx-auto max-w-screen-lg flex justify-between items-center">
                <a href="/" class="text-xl font-bold">Home</a>
                <div>
                    <x-nav.link route="books.index">Books</x-nav.link>
                    <x-nav.link route="books.index">Authors</x-nav.link>
                    <x-nav.link route="books.index" class="text-white">Clients</x-nav.link>
                    <x-nav.link route="books.index">Orders</x-nav.link>
                </div>
            </div>
        </div>
    </nav>
    <div class="mx-auto max-w-screen-lg w-full px-4 py8 sm:px-6 sm:py-12 lg:px-8 flex-1">
        <header class="bg-white">
            <div class="flex flex-col tiems-start gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    @if (session()->has('message'))
                        <p class="text-green-600">{{ session()->get('message') }}</p>
                    @endif
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">{{ $title ?? 'Title' }}</h1>
                    <p class="mt-1.5 text-sm text-gray-500">
                        {{ $description ?? 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe rem doloremque, in ad, laudantium nobis magni dolores ullam' }}
                    </p>
                </div>
            </div>
        </header>
    </div>

    <footer class="bg-gray-50 border-t text-sm p-4">
        <div class="mx-auto max-w-screen-lg">
            <div class="flex justify-between items-center">
                <div>
                    <a href="https://github.com/anne-dot/" class="text-gray-600 hover:text-gray-900" target="_blank">About Us</a>
                    <a href="https://www.linkedin.com/in/anne-ruusmann-4182a845" class="ml-4 text-gray-600 hover:text-gray-900" target="_blank">Contact</a>
                </div>
                <div>
                    <a href="https://twitter.com" class="text-gray-600 hover:text-gray-900">Twitter</a>
                    <a href="https://facebook.com" class="ml-4 text-gray-600 hover:text-gray-900">Facebook</a>
                </div>
            </div>
            <p class="text-center">© 2024 Bookify</p>
        </div>
    </footer>

</body>

</html>
