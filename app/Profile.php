<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /*
     * Fillable fields
     */
    protected $fillable = [
        'name', 'description'
        ];
}
