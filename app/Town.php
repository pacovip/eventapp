<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    /*
     * Fillable fields
     */
    protected $fillable = [
        'city_id', 'name', 'description'
        ];
    
    /*
     * Relationship
     */   
    public function city() {
        return $this->belongsTo('App\City');
    }
    public function districts() {
        return $this->hasMany('App\District');
    }
}
