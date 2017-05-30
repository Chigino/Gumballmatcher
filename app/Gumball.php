<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Gumball extends Model
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
        'description',
        'image',
    ];

    /**
     * Get the user associated with the gumball.
     *
     * @param integer $userId
     *
     * @return BelongsToMany
     */
    public function user($userId)
    {
        return $this->belongsToMany('App\Gumball', 'user_gumballs')
            ->where('user_gumballs.user_id', '=', $userId)
            ->where('user_gumballs.gumball_id', '=', $this->id);
    }

    /**
     * Get the user gumball associated with the gumball.
     *
     * @param integer $userId
     *
     * @return HasOne
     */
    public function userGumball($userId)
    {
        return $this->hasone('App\UserGumball', 'user_gumballs', 'gumball_id')
            ->where('user_gumballs.user_id', '=', $userId)
            ->where('user_gumballs.gumball_id', '=', $this->id);
    }
}
