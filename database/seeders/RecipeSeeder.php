<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                "title" => "Classic Living Room Sofa",
                "category" => "Furniture",
                "difficulty" => "Easy",
                "cookingTime" => 20,
                "rating" => 4.2,
                "postedTime" => Carbon::now()->subHours(3),
                "summary" => "A tropical inspired classic sofa ideal for bright modern living rooms.",
                "recipeArticle" => "This sofa is designed for both tropical and contemporary themed interiors. It features soft cushioning blended with premium frame support. Ideal for homes seeking a warm and stylish appeal.",
                "ingredient" => json_encode(["Foam cushion", "Hardwood frame", "Soft linen fabric", "Backrest padding", "Polished legs"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Minimalist Beige Sofa",
                "category" => "Furniture",
                "difficulty" => "Hard",
                "cookingTime" => 45,
                "rating" => 4.8,
                "postedTime" => Carbon::now()->subDays(2),
                "summary" => "A luxury beige sofa ideal for minimal interior aesthetics.",
                "recipeArticle" => "Made for lovers of clean and minimal homes, this beige sofa delivers comfort with simplicity. Its elegant body lines and soft surface fabric make it durable and premium.",
                "ingredient" => json_encode(["Beige upholstery", "Steel base", "Memory foam", "Side support cushions", "Premium textile layers"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Elegant Wooden Chair",
                "category" => "Furniture",
                "difficulty" => "Medium",
                "cookingTime" => 30,
                "rating" => 4.5,
                "postedTime" => Carbon::now()->subMinutes(12),
                "summary" => "Strong handcrafted wooden chair built for long-term use.",
                "recipeArticle" => "Crafted manually using premium wood, this chair offers strength and elegance. Perfect for reading corners or lounge areas where comfort meets timeless design.",
                "ingredient" => json_encode(["Polished oak wood", "Cushion seat foam", "Protective varnish", "Hand-cut structure", "Backrest support"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Vintage Sofa Set",
                "category" => "Furniture",
                "difficulty" => "Easy",
                "cookingTime" => 18,
                "rating" => 4.0,
                "postedTime" => Carbon::now()->subDays(1),
                "summary" => "Retro-styled vintage sofa set for classic home lovers.",
                "recipeArticle" => "This vintage themed sofa comes with a luxurious retro finish. Built for homes with deep heritage styling, it brings back old charm with soft cushions and rounded wood detail.",
                "ingredient" => json_encode(["Velvet surface", "Retro wood finish", "Foam base", "Gold rivets", "Classic armrest design"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Soft Grey Couch",
                "category" => "Furniture",
                "difficulty" => "Hard",
                "cookingTime" => 50,
                "rating" => 4.9,
                "postedTime" => Carbon::now()->subHours(7),
                "summary" => "A simple but modern grey couch suited for all home layouts.",
                "recipeArticle" => "Designed for modern compact apartments, this grey couch delivers a balance of softness and elegant tones. Its minimal grey color blends with all wall palettes.",
                "ingredient" => json_encode(["Soft wool fabric", "Foam pillow set", "Grey textile coating", "Stability frame steel", "Hand-stitched edges"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Luxury Leather Couch",
                "category" => "Furniture",
                "difficulty" => "Medium",
                "cookingTime" => 35,
                "rating" => 4.6,
                "postedTime" => Carbon::now()->subDays(5),
                "summary" => "Premium leather sofa with hand-stitched detailing.",
                "recipeArticle" => "This leather sofa brings richness and timeless quality. Hand stitched for lasting durability, it adds a bold luxurious look to living rooms.",
                "ingredient" => json_encode(["Genuine leather", "Polished wood", "Foam padding", "Hand-sewn paneling", "Steel base reinforcement"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Modern Sectional Sofa",
                "category" => "Furniture",
                "difficulty" => "Easy",
                "cookingTime" => 15,
                "rating" => 4.1,
                "postedTime" => Carbon::now()->subHours(10),
                "summary" => "Big L-shaped sectional for family-friendly homes.",
                "recipeArticle" => "Perfect for large households, this sectional sofa offers multiple seating angles. Designed for comfort, the wide cushions and L-shape support make it suitable for long use.",
                "ingredient" => json_encode(["L-shape modules", "Large foam seat", "Washable covers", "Corner backrest", "Sturdy wooden legs"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Green Velvet Lounge",
                "category" => "Furniture",
                "difficulty" => "Medium",
                "cookingTime" => 28,
                "rating" => 4.3,
                "postedTime" => Carbon::now()->subMinutes(8),
                "summary" => "A velvet luxury lounge sofa designed for premium spaces.",
                "recipeArticle" => "This green velvet lounge offers a royal feel with gold accented frame. Sets a bold appearance in luxury halls and provides deep cushion comfort.",
                "ingredient" => json_encode(["Velvet upholstery", "Gold metal frame", "Soft padded interior", "Round edge design", "Silk stitching"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Contemporary Sofa Bed",
                "category" => "Furniture",
                "difficulty" => "Hard",
                "cookingTime" => 40,
                "rating" => 4.7,
                "postedTime" => Carbon::now()->subDays(3),
                "summary" => "Convertible sofa bed ideal for small apartments.",
                "recipeArticle" => "A dual-use sofa that converts quickly into a bed. Best for studio spaces, guest rooms and multi-purpose living.",
                "ingredient" => json_encode(["Convertible hinge", "Foldable mattress", "Cushion layers", "Metal extend frame", "Fabric seat cover"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ],
            [
                "title" => "Scandinavian Armchair",
                "category" => "Furniture",
                "difficulty" => "Easy",
                "cookingTime" => 22,
                "rating" => 4.0,
                "postedTime" => Carbon::now()->subMinutes(35),
                "summary" => "Light scandinavian chair with natural wood leg finish.",
                "recipeArticle" => "This chair blends Nordic minimal design with comfort. Lightweight body, angled legs and breathable covering enhances relaxation spaces.",
                "ingredient" => json_encode(["Nordic wood legs", "Cotton seat fabric", "High backrest foam", "Natural polish coat", "Cushion panel"]),
                "images" => json_encode([
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc",
                    "https://images.unsplash.com/photo-1555041469-a586c61ea9bc"
                ])
            ]
        ];

        foreach ($recipes as $recipe) {
            DB::table('recipes')->insert(array_merge($recipe, [
                'created_at' => now(),
                'updated_at' => now()
            ]));
        }

        $this->command->info('Successfully imported 10 furniture recipes!');
    }
}
