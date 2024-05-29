<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the comment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     /**
     * Get the country that owns the comment.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

     /**
     * Get the city that owns the comment.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
