<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return response()->json($recipes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'difficulty' => 'required',
            'cookingTime' => 'required',
            'rating' => 'required',
            'postedTime' => 'required',
            'ingredient' => 'required',
            'summary' => 'required',
            'recipeArticle' => 'required',
            'images' => 'required',
        ]);

        $recipe = Recipe::create($request->all());

        return response()->json([
            'message' => 'Recipe created successfully',
            'recipe' => $recipe
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::with('reviews')->findOrFail($id);
        return response()->json($recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'difficulty' => 'required',
            'cookingTime' => 'required',
            'rating' => 'required',
            'postedTime' => 'required',
            'ingredient' => 'required',
            'summary' => 'required',
            'recipeArticle' => 'required',
            'images' => 'required',
        ]);

        $recipe->update($request->all());

        return response()->json([
            'message' => 'Recipe updated successfully',
            'recipe' => $recipe
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return response()->json([
            'message' => 'Recipe deleted successfully'
        ]);
    }

    /**
     * Display the top 10 recipes with the most reviews.
     *
     * @return \Illuminate\Http\Response
     */
    public function top()
    {
        $recipes = Recipe::withCount('reviews')->orderBy('reviews_count', 'desc')->take(10)->get();
        return response()->json($recipes);
    }

    /**
     * Display the top 10 recipes with the highest rating, sorted by newest first.
     *
     * @return \Illuminate\Http\Response
     */
    public function topRated()
    {
        $recipes = Recipe::orderBy('rating', 'desc')->latest()->take(10)->get();
        return response()->json($recipes);
    }
}
