<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return view('players.index');
    }

    public function create()
    {
        return view('players.create');
    }
}
