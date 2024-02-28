<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
@include('layouts.nav')
<div class="bg-red-950">
    <div class="bg-black/40 w-full h-lvh  p-10">
        <div class="message-box">
            @if(session()->has('success'))
                <div
                    class="bg-green-700 text-white text-center p-4 mb-4 transition duration-150 ease-in-out shadow-sm shadow-gray-950/30">
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <h1 class="w-full text-center text-white text-4xl">Players</h1> <a
                class="text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
                href="{{route('players.create')}}">Add player</a>
        </div>
        <div class="player-container mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($players as $player)
                <div class="max-w-sm border-2 p-4 rounded-2xl bg-white shadow-2xl shadow-gray-950/80">
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
    </div>
</div>
</body>
</html>
