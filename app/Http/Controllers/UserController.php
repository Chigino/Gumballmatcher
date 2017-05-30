<?php

namespace App\Http\Controllers;

use App\Alliance;
use App\Faction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
    public function showUsers()
    {
        $user = Auth::user();
        $users = User::where('alliance_id', '=', $user->alliance_id)
            ->with('gumballs', 'fates')
            ->get();

        return view('user')
            ->with(compact('users'))
            ->with(compact('user'));
    }
}
