<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events_type extends Model
{
    /*
     * Fillable fields
     */
    protected $fillable = [
        'name', 'description'
        ];
    
    /*
     * Relationship
     */   
    public function events() {
        return $this->hasMany('App\Event', 'type_id');
    }
    
    
}
