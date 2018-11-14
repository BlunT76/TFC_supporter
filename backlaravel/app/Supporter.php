<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Supporter extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email'
    ];

    public function votes()
    {
    	return $this->hasMany('App\Vote');
    }

    public function topphotos()
    {
    	return $this->hasMany('App\Topphoto');
    }

    public function storephotos()
    {
    	return $this->hasMany('App\Storephoto');
    }
}
