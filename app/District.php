<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    /*
     * Fillable fields
     */
    protected $fillable = [
        'town_id', 'name', 'description'
        ];
    
    /*
     * Relationship
     */   
    public function town() {
        return $this->belongsTo('App\Town');
    }
}
