<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    
    protected $fillable = [
        'review',
        'authermail',
        'authername',
        'rating',
        'image',
        'recipe_id',
    ];

    /**
     * Get the recipe that the review belongs to.
     */
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
