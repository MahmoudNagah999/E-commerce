<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nameEn = $this->faker->unique()->word;
        $nameAr = 'منتح' . rand(1, 1000);

        return [
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,
            'name' => ['en' => $nameEn, 'ar'=> $nameAr],
            'slug' => Str::slug($nameEn) . '-' . rand(1000, 10000),
            'description' => ['en' => $this->faker->sentence(), 'ar' => 'وصف المنتج'],
            'price' => $this->faker->randomFloat(2, 10, 500),
            'stock' => $this->faker->numberBetween(0, 100),
            'image' => 'https://via.placeholder.com/150',
        ];
    }
}
