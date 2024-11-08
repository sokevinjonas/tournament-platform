<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserGameStat extends Model
{
    protected $fillable = ['user_id', 'game', 'level', 'victories', 'stars', 'clan_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
