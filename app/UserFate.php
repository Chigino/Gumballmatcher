<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserFate extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fate_id',
        'user_id',
    ];

    /**
     * Get the user for the user fate.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    /**
     * Get the fate for the user fate.
     */
    public function fate()
    {
        return $this->hasOne('App\Fate', 'id', 'fate_id');
    }
}
