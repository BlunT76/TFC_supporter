<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Storephoto extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supporter_id', 'game_id', 'url'
    ];

    public function supporter()
    {
    	return $this->belongsTo('App\Supporter');
    }

    public function game()
    {
    	return $this->belongsTo('App\Game');
    }
}
