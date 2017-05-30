<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Group extends Model
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
        'image',
        'description'
    ];

    /**
     * Get the fates for the group.
     */
    public function fates()
    {
        return $this->hasMany('App\Fate', 'group_id', 'id');
    }
}
