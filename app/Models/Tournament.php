<?php

namespace App\Models;

use App\Models\Matche;
use App\Models\District;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = ['name', 'district_id', 'round'];

    /**
     * Un tournoi appartient à un district.
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    /**
     * Un tournoi a plusieurs matchs.
     */
    public function matches()
    {
        return $this->hasMany(Matche::class);
    }
}
