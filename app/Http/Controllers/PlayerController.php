<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', ['players' => $players]);
    }

    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'nationality' => 'required',
        ]);

        $newPlayer = Player::create($data);
        return redirect(route('players.index'));
//       dd($request); // This will dump the request object
    }
}
