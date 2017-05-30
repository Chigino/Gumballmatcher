<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserGumball extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'gumball_id',
    ];

    /**
     * Get the user for the user gumball.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    /**
     * Get the gumball for the user gumball.
     */
    public function gumball()
    {
        return $this->hasOne('App\Gumball', 'id', 'gumball_id');
    }
}
