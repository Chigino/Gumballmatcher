<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FateGumball extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fate_id',
        'gumball_id',
    ];

    /**
     * Get the gumball for the fate gumball.
     */
    public function gumball()
    {
        return $this->hasOne('App\Gumball');
    }

    /**
     * Get the fate for the fate gumball.
     */
    public function fate()
    {
        return $this->belongsTo('App\Fate');
    }
}
