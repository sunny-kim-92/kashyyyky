<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Set extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function cards(): BelongsToMany
    {
        return $this->belongsToMany(Card::class);
    }
}
