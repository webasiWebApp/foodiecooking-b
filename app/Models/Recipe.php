<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'category',
        'difficulty',
        'cookingTime',
        'rating',
        'postedTime',
        'ingredient',
        'summary',
        'recipeArticle',
        'images',
    ];

    /**
     * Get the reviews for the recipe.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
