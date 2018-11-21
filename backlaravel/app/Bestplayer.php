<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Bestplayer extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tfcplayer_id', 'game_id'
    ];

    public function tfcplayer()
    {
    	return $this->belongsTo('App\Tfcplayer');
    }

    public function game()
    {
    	return $this->belongsTo('App\Game');
    }
}
