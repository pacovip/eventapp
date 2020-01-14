<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    /*
     * Fillable fields
     */
    protected $fillable = [
        'event_id', 'user_id'
        ];
    
    /*
     * Relationship
     */   
    public function event() {
        return $this->belongsTo('App\Event');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
    
}
