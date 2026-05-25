<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gemini Chat</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="w-full max-w-[335px] lg:max-w-2xl bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg p-6 lg:p-10">
                <h1 class="mb-6 text-xl font-medium text-center">Gemini Chat</h1>

                <form action="{{ route('chat.store') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <label for="prompt" class="block mb-2 text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">
                            Input your content:
                        </label>
                        <textarea
                            id="prompt"
                            name="prompt"
                            rows="4"
                            class="block p-2.5 w-full text-sm text-[#1b1b18] bg-white dark:bg-[#0a0a0a] rounded-lg border border-[#e3e3e0] dark:border-[#3E3E3A] focus:ring-[#f53003] focus:border-[#f53003] dark:text-[#EDEDEC] dark:focus:ring-[#FF4433] dark:focus:border-[#FF4433]"
                            placeholder="Ask Gemini something..."
                            required
                        >{{ session('prompt') }}</textarea>
                    </div>
                    <button
                        type="submit"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-sm font-medium text-center text-white bg-[#1b1b18] dark:bg-[#eeeeec] dark:text-[#1C1C1A] rounded-lg hover:bg-black dark:hover:bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800"
                    >
                        Send to Gemini
                    </button>
                </form>

                @if (session('response'))
                    <div class="mt-8 p-6 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg">
                        <h2 class="mb-2 text-sm font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Gemini's Response:</h2>
                        <div class="text-[13px] leading-[20px] text-[#1b1b18] dark:text-[#EDEDEC] whitespace-pre-wrap">
                            {{ session('response') }}
                        </div>
                    </div>
                @endif
            </main>
        </div>
    </body>
</html>
