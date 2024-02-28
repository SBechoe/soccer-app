<!doctype html>
@include('layouts.head')
<html class="h-full">
<body class="bg-red-950 flex h-full">
<div class="max-w flex flex-col bg-black/40 mx-auto size-full">
    <div class="max-w-[50rem] flex flex-col mx-auto size-full">
        <!-- ========== HEADER ========== -->
        <header class="mb-auto flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-sm py-4">
            <nav class="w-full px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
                <div class="flex items-center justify-between">
                    <h1 class="flex-none text-2xl font-semibold text-white focus:outline-none focus:ring-1 focus:ring-gray-600"
                        aria-label="Brand">Shailentry Sapna Bechoe <em class="text-sm"> - Laravel Tailwind dinges</em></h1>
                </div>
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                <h1 class="block text-2xl font-bold text-white sm:text-4xl">Soccer App</h1>
                <p class="mt-3 text-lg text-gray-300">Add your favorite players to make your dreamteam</p>
                <div class="mt-5 flex flex-col justify-center items-center sm:flex-row sm:gap-3">
                    <a class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-white text-black hover:bg-gray-200"
                       href="{{route('players.index')}}">
                        Get Started
                    </a>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        <footer class="mt-auto text-center py-5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-sm text-gray-400">&copy; 2024 Shailentry Sapna Bechoe. All rights reserved.</p>
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->
    </div>
</div>
</body>
</html>
