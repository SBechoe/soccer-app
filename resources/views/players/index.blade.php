<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="w-full h-lvh bg-red-950">
    <div class="message-box">
        @if(session()->has('success'))
            <div class="bg-green-700 text-white text-center p-4 mb-4 transition duration-150 ease-in-out shadow-sm shadow-gray-950/30">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="player-container flex justify-center items-center ">
        @foreach($players as $player)
            <div class="max-w-sm m-6 border-2 p-4 rounded-2xl bg-white shadow-2xl shadow-gray-950/80">
                {{--        <img class="rounded-t-lg mx-auto" src="https://cdn.futbin.com/content/fifa24/img/players/238382.png?v=23"--}}
                {{--             alt=""/>--}}
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$player->first_name . " " . $player->last_name}}</h5>
                    </a>
                    <ul class="max-w-md space-y-1 list-disc list-inside">
                        {{--                <li>--}}
                        {{--                    Club: Juventus--}}
                        {{--                </li>--}}
                        <li>
                            Nationality: {{$player->nationality}}
                        </li>
                        {{--                <li>--}}
                        {{--                    Age: 49--}}
                        {{--                </li>--}}
                    </ul>
                </div>
                <a href="{{route('players.edit', ['player' => $player])}}"
                   class="text-white bg-gray-900 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Edit
                    player</a>
            </div>
        @endforeach
    </div>
    {{--    <div class="max-w-sm m-6 border-2 p-4 rounded-2xl bg-white shadow-2xl shadow-gray-950/80">--}}
    {{--        <img class="rounded-t-lg mx-auto"--}}
    {{--             src="https://cdn.futbin.com/content/fifa24/img/players/228702.png?v=23"--}}
    {{--             alt=""/>--}}
    {{--        </a>--}}
    {{--        <div class="p-5">--}}
    {{--            <a href="#">--}}
    {{--                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Frenkie de Jong</h5>--}}
    {{--            </a>--}}
    {{--            <ul class="max-w-md space-y-1 list-disc list-inside">--}}
    {{--                <li>--}}
    {{--                    Club: Barcelona--}}
    {{--                </li>--}}
    {{--                <li>--}}
    {{--                    Nationality: Netherlands--}}
    {{--                </li>--}}
    {{--                <li>--}}
    {{--                    Age: 26--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="max-w-sm m-6 border-2 p-4 rounded-2xl bg-white shadow-2xl shadow-gray-950/80">--}}
    {{--        <img class="rounded-t-lg mx-auto"--}}
    {{--             src="https://cdn.futbin.com/content/fifa15/img/players/1179.png?v=23"--}}
    {{--             alt=""/>--}}
    {{--        </a>--}}
    {{--        <div class="p-5">--}}
    {{--            <a href="#">--}}
    {{--                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Gianluigi Buffon</h5>--}}
    {{--            </a>--}}
    {{--            <ul class="max-w-md space-y-1 list-disc list-inside">--}}
    {{--                <li>--}}
    {{--                    Club: Juventus--}}
    {{--                </li>--}}
    {{--                <li>--}}
    {{--                    Nationality: Italy--}}
    {{--                </li>--}}
    {{--                <li>--}}
    {{--                    Age: 46--}}
    {{--                </li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>
</body>
</html>
