<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialitie extends Model
{
    use HasFactory, HasUuids;




    public function artist(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Artist::class);
    }
}
