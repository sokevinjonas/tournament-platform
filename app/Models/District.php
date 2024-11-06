<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $fillable = [
        'name',
        'min_town_hall_level',
        'max_town_hall_level',
        'status'
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }
}
