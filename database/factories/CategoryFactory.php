<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nameEn = $this->faker->word() ?? 'default-category';
        $nameAr = 'قسم' . rand(1, 100);

        return [
            'name' => ['en' => $nameEn, 'ar' => $nameAr],
            'slug' => Str::slug($nameEn) . '-' . rand(1000, 10000),
            'description' => ['en' => $this->faker->sentence(), 'ar' => 'وصف القسم'],
        ];
    }
}
