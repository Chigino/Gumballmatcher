<?php

namespace App\Http\Controllers;

use App\Faction;
use App\Gumball;
use App\User;
use App\UserGumball;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GumballController extends Controller
{
    use RedirectsUsers;

    /**
     * Where to redirect users after gumball.
     *
     * @var string
     */
    protected $redirectTo = '/gumballs';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming gumball request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'user' => 'required|integer|exists:users,id',
                'gumballs' => 'required|array',
                'gumballs.*' => 'integer|exists:gumballs,id',
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return void
     */
    protected function create(array $data)
    {
        foreach ($data['gumballs'] as $key => $value) {
            if (Gumball::find($value)) {
                UserGumball::updateOrCreate(
                    [
                        'user_id' => Auth::user()->id,
                        'gumball_id' => $value
                    ],
                    [
                        'user_id' => Auth::user()->id,
                        'gumball_id' => $value
                    ]
                );
            }
        }

        UserGumball::where('user_id', '=', Auth::user()->id)
            ->whereNotIn('gumball_id', $data['gumballs'])
            ->delete();
    }

    /**
     * Show the application gumballs form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showGumballsForm()
    {
        $factions = Faction::all()
            ->load('gumballs');
        $gumballs = Gumball::all();
        $user = Auth::user()
            ->load('gumballs');

        return view('gumball')
            ->with(compact('gumballs'))
            ->with(compact('factions'))
            ->with(compact('user'));
    }

    /**
     * Handle a gumball request for the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function gumball(Request $request)
    {
        $this->validator($request->all())->validate();

        $result = $this->create($request->all());

        $request->session()->flash('status', trans('gumball.complete'));

        return $result ?: redirect($this->redirectPath());
    }
}
