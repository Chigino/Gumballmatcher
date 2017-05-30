<?php

namespace App\Http\Controllers;

use App\Faction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FactionController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application factions.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFactions()
    {
        $factions = Faction::all();
        $user = Auth::user();

        return view('faction')
            ->with(compact('factions'))
            ->with(compact('user'));
    }
}
