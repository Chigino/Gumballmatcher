<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Faction extends Model
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
     * Get the gumball associated with the faction.
     *
     * @return HasMany
     */
    public function gumballs()
    {
        return $this->hasMany('App\Gumball');
    }
}
