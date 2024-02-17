<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
<nav class="bg-orange-200 w-full shadow-2xl shadow-gray-950/80">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        {{--        <a href="{{route('players.index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">--}}
        {{--            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">--}}
        {{--            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>--}}
        {{--        </a>--}}
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                    class="text-white w-40 bg-red-950 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-4 py-2 text-center">
                Login
            </button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-2xl text-red-950 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-red-950"
                       aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-2xl text-red-950 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-red-950"
                       aria-current="page">About us</a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-2xl text-red-950 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-red-950"
                       aria-current="page">The players</a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-2xl text-red-950 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-red-950"
                       aria-current="page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
