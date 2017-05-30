<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'alliance_id',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the alliance associated with the user.
     *
     * @return BelongsTo
     */
    public function alliance()
    {
        return $this->belongsTo('App\Alliance', 'alliance_id', 'id');
    }

    /**
     * Get the gumballs associated with the user.
     *
     * @return BelongsToMany
     */
    public function gumballs()
    {
        return $this->belongsToMany('App\Gumball', 'user_gumballs');
    }

    /**
     * Has the user got the associated gumballs?
     *
     * @param Collection|array $gumballs
     * @param boolean          $strict
     *
     * @return boolean
     */
    public function hasGumballs($gumballs, $strict = true)
    {
        if ($gumballs instanceof Collection) {
            $count = $gumballs->count();
        } else {
            $count = count($gumballs);
        }

        $gumballCount = $this->gumballs()
            ->whereIn('gumballs.id', $gumballs)
            ->count();

        return $count > 0 &&
            ($strict ? $gumballCount === $count : $gumballCount > 0);
    }

    /**
     * Get the user gumballs associated with the user.
     *
     * @return HasMany
     */
    public function userGumballs()
    {
        return $this->hasMany('App\UserGumball', 'user_id', 'id');
    }

    /**
     * Get the factions gumballs associated with the user.
     *
     * @param integer $faction
     *
     * @return HasMany
     */
    public function factionGumballs($faction)
    {
        return $this->gumballs()
            ->where('gumballs.faction_id', '=', $faction);
    }

    /**
     * Get the fates associated with the user.
     *
     * @return BelongsToMany
     */
    public function fates()
    {
        return $this->belongsToMany('App\Fate', 'user_fates');
    }

    /**
     * Get the user fates associated with the user.
     *
     * @return HasMany
     */
    public function userFates()
    {
        return $this->hasMany('App\UserFate', 'user_id', 'id');
    }

    /**
     * Get the groups fates associated with the user.
     *
     * @param integer $group
     *
     * @return HasMany
     */
    public function groupFates($group)
    {
        return $this->fates()
            ->where('fates.group_id', '=', $group);
    }
}
