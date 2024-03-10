<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_number',
        'cost',
        'set_id',
        'name',
        'card_type',
        'subtitle',
        'power',
        'hp',
        'front_text',
        'double_sided',
        'rarity',
        'unique',
        'artist',
        'front_art',
        'back_text',
        'back_art'
    ];

    // Relationships
    public function set(): BelongsTo
    {
        return $this->belongsTo(Set::class);
    }

    public function arenas(): BelongsToMany
    {
        return $this->belongsToMany(Arena::class);
    }

    public function aspects(): BelongsToMany
    {
        return $this->belongsToMany(Aspect::class);
    }

    public function cardTraits(): BelongsToMany
    {
        return $this->belongsToMany(CardTrait::class);
    }

    public function keywords(): BelongsToMany
    {
        return $this->belongsToMany(Keyword::class);
    }
}
