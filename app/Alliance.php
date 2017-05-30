<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

class Alliance extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'key',
    ];

    /**
     * Get the users for the alliance.
     *
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'alliance_id', 'id');
    }

    /**
     * Get the gumballs for the alliance.
     *
     * @param integer $ignoreUser
     *
     * @return HasMany
     */
    public function gumballs($ignoreUser = 0)
    {
        return Gumball::select('gumballs.*')
            ->distinct('gumballs.id')
            ->join('user_gumballs', 'user_gumballs.gumball_id', 'gumballs.id')
            ->join('users', 'users.id', 'user_gumballs.user_id')
            ->where('users.alliance_id', '=', $this->id)
            ->where('users.id', '!=', $ignoreUser);
    }

    /**
     * Has any alliance got the associated gumballs?
     *
     * @param Collection|array $gumballs
     * @param integer          $ignoreUser
     * @param boolean          $strict
     *
     * @return boolean
     */
    public function hasGumballs($gumballs, $ignoreUser = 0, $strict = true)
    {
        if ($gumballs instanceof Collection) {
            $count = $gumballs->count();
        } else {
            $count = count($gumballs);
        }

        $gumballCount = User::join('user_gumballs', 'users.id', 'user_gumballs.user_id')
            ->join('gumballs', 'user_gumballs.gumball_id', 'gumballs.id')
            ->where('users.alliance_id', '=', $this->id)
            ->whereIn('gumballs.id', $gumballs)
            ->where('users.id', '!=', $ignoreUser)
            ->count();

        return $count > 0 &&
            ($strict ? $gumballCount === $count : $gumballCount > 0);
    }

    /**
     * Get users associated with the alliance that have the gumballs
     *
     * @param Collection|array $gumballs
     * @param integer          $ignoreUser
     *
     * @return boolean
     */
    public function getUsersWithGumballs($gumballs, $ignoreUser = 0)
    {
        return User::select('users.*')
            ->distinct('user.id')
            ->join('user_gumballs', 'users.id', 'user_gumballs.user_id')
            ->join('gumballs', 'user_gumballs.gumball_id', 'gumballs.id')
            ->where('users.alliance_id', '=', $this->id)
            ->whereIn('gumballs.id', $gumballs)
            ->where('users.id', '!=', $ignoreUser)
            ->get();
    }

    /**
     * Can the alliance fate the gumballs
     *
     * @param Collection|array $gumballs
     * @param User             $user
     *
     * @return boolean
     */
    public function canUserFateGumballs($gumballs, User $user)
    {
        if ($gumballs instanceof Collection) {
            $count = $gumballs->count();
        } else {
            $count = count($gumballs);
        }

        if ($count <= 1) {
            return false;
        }

        if ($gumballs instanceof Collection) {
            $firstGumball = $gumballs->first();
            $lastGumball = $gumballs->last();
        } else {
            $firstGumball = $gumballs[0];
            $lastGumball = $gumballs[1];
        }

        $allianceGumballs = $this->gumballs()
            ->get();

        if ($allianceGumballs->where('id', $firstGumball)->count() &&
            $user->gumballs->where('id', $lastGumball)->count()
        ) {
            return true;
        }

        if ($allianceGumballs->where('id', $lastGumball)->count() &&
            $user->gumballs->where('id', $firstGumball)->count()
        ) {
            return true;
        }

        return false;
    }

    /**
     * Get users associated with the alliance that can fate match the gumballs
     *
     * @param Collection|array $gumballs
     * @param User             $user
     *
     * @return User|null
     */
    public function getFateUsersByGumballs($gumballs, $user)
    {
        if ($gumballs instanceof Collection) {
            $count = $gumballs->count();
        } else {
            $count = count($gumballs);
        }

        if ($count <= 1) {
            return null;
        }

        if ($gumballs instanceof Collection) {
            $firstGumball = $gumballs->first();
            $lastGumball = $gumballs->last();
        } else {
            $firstGumball = $gumballs[0];
            $lastGumball = $gumballs[1];
        }

        if ($this->hasGumballs([$firstGumball], $user->id) && $user->hasGumballs([$lastGumball])) {
            return $this->getUsersWithGumballs([$firstGumball], $user->id);
        }

        if ($this->hasGumballs([$lastGumball], $user->id) && $user->hasGumballs([$firstGumball])) {
            return $this->getUsersWithGumballs([$lastGumball], $user->id);
        }

        return null;
    }
}
