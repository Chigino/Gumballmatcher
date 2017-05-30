<?php

namespace App\Http\Controllers;

use App\Alliance;
use App\Faction;
use App\Fate;
use App\Group;
use App\UserFate;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MatchController extends Controller
{
    use RedirectsUsers;

    /**
     * Where to redirect users after fate.
     *
     * @var string
     */
    protected $redirectTo = '/fates';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application matches.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMatches()
    {
        $groups = Group::all()
            ->load('fates')
            ->load('fates.gumballs');
        $fates = Fate::all()
            ->load('gumballs');
        $user = Auth::user()
            ->load('gumballs')
            ->load('fates');
        $alliance = $user->alliance()
            ->first();
        $gumballs = $alliance->gumballs($user->id)->get();

        return view('match')
            ->with(compact('fates'))
            ->with(compact('groups'))
            ->with(compact('user'))
            ->with(compact('alliance'));
    }
}
