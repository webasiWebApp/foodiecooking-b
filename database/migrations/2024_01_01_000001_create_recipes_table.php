<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('difficulty')->nullable();
            $table->integer('cookingTime')->nullable();
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->timestamp('postedTime')->nullable();
            $table->json('ingredient')->nullable();
            $table->text('summary')->nullable();
            $table->text('recipeArticle')->nullable();
            $table->json('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
