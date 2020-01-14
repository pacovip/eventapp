<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    /*
     * Fillable fields
     */
    protected $fillable = [
        'type_id', 'city_id', 'town_id', 'district_id'
        ];
    
    /*
     * Relationship
     */   
    public function type() {
        return $this->belongsTo('App\Events_type');
    }
    public function city() {
        return $this->belongsTo('App\City');
    }
    public function town() {
        return $this->belongsTo('App\Town');
    }
    public function district() {
        return $this->belongsTo('App\District');
    }
}
