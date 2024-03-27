<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'history',
        'craftingDescription',
        'siret',
    ];

    /*The attributes that should be hidden for serialization.
@var array<int, string>*/

    protected $hidden = [

    ];

    /*The attributes that should be cast.
    @var array<string, string>*/

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class);
    }

    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }

    public function speciality(): BelongsTo
    {
        return $this->belongsTo(Specialitie::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}





