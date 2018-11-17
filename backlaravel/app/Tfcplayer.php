<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Tfcplayer extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname' , 'lastname' , 'portrait' ,'number', 'position'
    ];

    public function votes()
    {
    	return $this->hasMany('App\Vote');
    }

    public function games ()
    {
    	return $this->hasMany('App\Game');
    }
}
