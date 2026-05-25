<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cocktails - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-6xl max-w-[335px] text-sm mb-6 flex justify-between items-center">
            <a href="{{ url('/') }}" class="font-medium text-lg">Cocktail App</a>
            <nav class="flex items-center gap-4">
                <a href="{{ url('/') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">Home</a>
            </nav>
        </header>

        <main class="w-full lg:max-w-6xl max-w-[335px] flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-semibold tracking-tight">Our Cocktails</h1>
                <p class="text-[#706f6c] dark:text-[#A1A09A]">Explore our collection of the finest cocktails.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($cocktails as $cocktail)
                    <div class="group bg-white dark:bg-[#161615] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg overflow-hidden flex flex-col transition-all hover:shadow-lg">
                        <div class="aspect-[4/3] w-full bg-[#fff2f2] dark:bg-[#1D0002] overflow-hidden">
                            @if ($cocktail->image_url)
                                <img src="{{ $cocktail->image_url }}" alt="{{ $cocktail->name }}" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-[#F53003]">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="p-5 flex flex-col flex-1 gap-2">
                            <h2 class="font-medium text-lg">{{ $cocktail->name }}</h2>
                            <p class="text-[13px] leading-[20px] text-[#706f6c] dark:text-[#A1A09A] line-clamp-2">
                                {{ $cocktail->description }}
                            </p>
                            <div class="mt-auto pt-4">
                                <span class="text-[12px] font-medium text-[#f53003] dark:text-[#FF4433] uppercase tracking-wider">Details</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $cocktails->links() }}
            </div>
        </main>

        <footer class="mt-12 text-[#706f6c] dark:text-[#A1A09A] text-xs">
            &copy; {{ date('Y') }} Cocktail App. Built with Laravel.
        </footer>
    </body>
</html>
