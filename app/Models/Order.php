<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, HasUuids;



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function custom(): BelongsTo
    {
        return $this->belongsTo(Custom::class);
    }
}
