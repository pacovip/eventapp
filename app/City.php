<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
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
    public function towns() {
        return $this->hasMany('App\Town');
    }
}
