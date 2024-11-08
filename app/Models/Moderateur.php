<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;

class Moderateur extends Model
{
    protected static function boot()
    {
        parent::boot();

        // Restreindre aux utilisateurs de type Moderateur
        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type', 'Moderateur');
        });
    }
}
