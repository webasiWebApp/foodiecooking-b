# Project Blueprint

## Overview

This project is a Laravel-based web application for managing recipes, reviews, and restaurants.

## Implemented Features

### Restaurants API

*   **GET /api/restaurants**: Fetches all restaurants.
*   **POST /api/restaurants**: Creates a new restaurant.
*   **GET /api/restaurants/{id}**: Fetches a single restaurant by its ID.
*   **PUT /api/restaurants/{id}**: Updates an existing restaurant.
*   **DELETE /api/restaurants/{id}**: Deletes a restaurant by its ID.

### Reviews API

*   **GET /api/reviews**: Fetches all reviews.
*   **POST /api/reviews**: Creates a new review.
*   **DELETE /api/reviews/{id}**: Deletes a review by its ID.

### Recipes API

*   **GET /api/recipes**: Fetches all recipes.
*   **POST /api/recipes**: Creates a new recipe.
*   **GET /api/recipes/top**: Fetches the 10 recipes with the most reviews.
*   **GET /api/recipes/top-rated**: Fetches the 10 recipes with the highest rating.
*   **GET /api/recipes/{id}**: Fetches a single recipe and its reviews.
*   **PUT /api/recipes/{id}**: Updates an existing recipe.
*   **DELETE /api/recipes/{id}**: Deletes a recipe by its ID.

## Current Task

*   Created a complete CRUD API for restaurants.
*   Waiting for MongoDB connection details to populate the `.env` file.
