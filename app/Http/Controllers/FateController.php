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

class FateController extends Controller
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
                'fates' => 'required|array',
                'fates.*' => 'integer|exists:fates,id',
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
        foreach ($data['fates'] as $key => $value) {
            if (Fate::find($value)) {
                UserFate::updateOrCreate(
                    [
                        'user_id' => Auth::user()->id,
                        'fate_id' => $value
                    ],
                    [
                        'user_id' => Auth::user()->id,
                        'fatel_id' => $value
                    ]
                );
            }
        }

        UserFate::where('user_id', '=', Auth::user()->id)
            ->whereNotIn('fate_id', $data['fates'])
            ->delete();
    }

    /**
     * Show the application fates form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFatesForm()
    {
        $groups = Group::all()
            ->load('fates')
            ->load('fates.gumballs');
        $fates = Fate::all();
        $user = Auth::user()
            ->load('fates');
        $alliance = $user->alliance()
            ->first();

        return view('fate')
            ->with(compact('fates'))
            ->with(compact('groups'))
            ->with(compact('user'))
            ->with(compact('alliance'));
    }

    /**
     * Handle a fate request for the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function fate(Request $request)
    {
        $this->validator($request->all())->validate();

        $result = $this->create($request->all());

        $request->session()->flash('status', trans('fate.complete'));

        return $result ?: redirect($this->redirectPath());
    }
}
