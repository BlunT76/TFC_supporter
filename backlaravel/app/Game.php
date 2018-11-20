<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Game extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hometeam', 'visitor', 'day','season'
    ];

    public function topphotos()
    {
    	return $this->hasMany('App\Topphoto');
    }

    public function storephotos()
    {
    	return $this->hasMany('App\Storephoto');
    }

    public function votes()
    {
    	return $this->hasMany('App\Vote');
    }

    public function tfcplayers()
    {
    	return $this->hasMany('App\Tfcplayer');
    }

}
