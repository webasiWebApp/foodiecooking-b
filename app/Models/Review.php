<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'review',
        'authermail',
        'authername',
        'rating',
        'image',
        'recipe_id',
    ];

    protected $collection = 'reviews';

    /**
     * Get the recipe that the review belongs to.
     */
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
