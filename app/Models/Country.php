<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    /**
     * Get the cities for the blog post.
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
