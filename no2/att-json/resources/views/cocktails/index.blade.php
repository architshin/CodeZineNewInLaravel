<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cocktails - {{ config('app.name', 'Laravel') }}</title>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow">
            <main class="flex max-w-[335px] w-full flex-col lg:max-w-4xl">
                <div class="p-6 lg:p-12 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-2xl font-medium">Cocktail Menu</h1>
                        <a href="{{ url('/') }}" class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:underline">Back to Home</a>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($cocktails as $cocktail)
                            <div class="p-6 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg hover:shadow-md transition-shadow">
                                <div class="flex justify-between items-start mb-2">
                                    <h2 class="text-lg font-semibold">{{ $cocktail->name }}</h2>
                                    <span class="px-2 py-1 text-xs font-medium rounded {{ $cocktail->is_alcoholic ? 'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400' : 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400' }}">
                                        {{ $cocktail->is_alcoholic ? 'Alcoholic' : 'Non-Alcoholic' }}
                                    </span>
                                </div>
                                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-4">{{ $cocktail->description }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm font-medium">Base: {{ $cocktail->base_spirit }}</span>
                                    <span class="text-lg font-bold">¥{{ number_format($cocktail->price) }}</span>
                                </div>
                                <details class="mt-4">
                                    <summary class="text-xs text-[#706f6c] dark:text-[#A1A09A] cursor-pointer hover:underline">View Recipe</summary>
                                    <p class="mt-2 text-xs leading-relaxed whitespace-pre-line">{{ $cocktail->recipe }}</p>
                                </details>
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
