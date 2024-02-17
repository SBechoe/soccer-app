<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
@include('layouts.nav')
<div class="w-full h-lvh flex justify-center items-center bg-red-950">
    <div class="edit-box w-1/4 border-2 p-4 rounded-2xl bg-white shadow-2xl shadow-gray-950/80">
        <form method="post" action="{{route('players.update', [$player->id])}}">
            @csrf
            @method('put')
            <h1 class="w-full text-center text-4xl">Edit player</h1>
            <div class="relative z-0 w-full mb-5 group">
                <input type="first-name" name="first_name" id="first-name" value="{{$player->first_name}}"
                       class="block py-2.5 px-0 w-full text-black text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" "/>
                <label for="first-name"
                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                    Name</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="last-name" name="last_name" id="last-name" value="{{$player->last_name}}"
                       class="block py-2.5 px-0 w-full text-black text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" "/>
                <label for="last-name"
                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                    Name</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="nationality" name="nationality" id="nationality" value="{{$player->nationality}}"
                       class="block py-2.5 px-0 w-full text-black text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                       placeholder=" "/>
                <label for="nationality"
                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nationality</label>
            </div>
            {{--        <div class="relative z-0 w-full mb-5 group">--}}
            {{--            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />--}}
            {{--            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>--}}
            {{--        </div>--}}
            <input
                class="shadow-2xl hover:shadow-gray-950/80 float-left text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
                type="submit" value="Update player">

            <div>
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="p-4 mb-4 rounded-lg bg-red-200 shadow-sm shadow-gray-950/30">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </form>
        <form method="post" action="{{route('players.delete', [$player->id])}}">
            @csrf
            @method('delete')
            <input
                class="shadow-2xl float-right hover:shadow-gray-950/80 text-white bg-red-800 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
                type="submit" value="Delete player">
        </form>
    </div>
</div>
</body>
</html>
