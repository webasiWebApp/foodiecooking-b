<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'restaurants';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'location',
        'coordinate',
        'images',
        'review',
    ];
}
