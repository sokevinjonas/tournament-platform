<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tournament;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{

    protected $fillable = ['name', 'level', 'max_participants'];

     /**
     * Un district a plusieurs tournois.
     */
    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }

     /**
     * Un district a plusieurs users.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
