<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->belongsToMany(Team::class)
            ->using(Role::class)
            ->as('role')
            ->withPivot('role');
    }
}
