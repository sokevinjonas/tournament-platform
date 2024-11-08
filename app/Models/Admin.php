<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;

class Admin extends Model
{
    protected static function boot()
    {
        parent::boot();

        // Restreindre aux utilisateurs de type Admin
        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type', 'Admin');
        });
    }
}
