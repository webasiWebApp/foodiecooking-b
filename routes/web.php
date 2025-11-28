<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RestaurantController;

Route::get('/', function () {
    return view('welcome');
});

// Recipes
Route::get('/api/recipes', [RecipeController::class, 'index']);
Route::post('/api/recipes', [RecipeController::class, 'store']);
Route::get('/api/recipes/top', [RecipeController::class, 'top']);
Route::get('/api/recipes/top-rated', [RecipeController::class, 'topRated']);
Route::get('/api/recipes/{id}', [RecipeController::class, 'show']);
Route::put('/api/recipes/{id}', [RecipeController::class, 'update']);
Route::delete('/api/recipes/{id}', [RecipeController::class, 'destroy']);

// Reviews
Route::get('/api/reviews', [ReviewController::class, 'index']);
Route::post('/api/reviews', [ReviewController::class, 'store']);
Route::delete('/api/reviews/{id}', [ReviewController::class, 'destroy']);

// Restaurants
Route::get('/api/restaurants', [RestaurantController::class, 'index']);
Route::post('/api/restaurants', [RestaurantController::class, 'store']);
Route::get('/api/restaurants/{id}', [RestaurantController::class, 'show']);
Route::put('/api/restaurants/{id}', [RestaurantController::class, 'update']);
Route::delete('/api/restaurants/{id}', [RestaurantController::class, 'destroy']);
