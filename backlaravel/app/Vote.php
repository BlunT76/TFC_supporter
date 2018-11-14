<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Vote extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supporter_id', 'game_id', 'tfcplayer_id'
    ];

    public function supporter()
    {
    	return $this->belongsTo('App\Supporter');
    }

    public function game()
    {
    	return $this->belongsTo('App\Game');
    }

    public function tfcplayer()
    {
    	return $this->belongsTo('App\Tfcplayer');
    }
}
