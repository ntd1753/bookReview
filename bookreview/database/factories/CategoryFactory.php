<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @retur
     * n array<string, mixed>
     */
    public function definition(): array
    {
        $num_category = Category::count();
        $random_number = fake()->randomNumber(1);

        if ($num_category >0 and $random_number < 3){
            return [
                'category_name' => fake()->name(),
                'category_slug' => fake()->slug(),
                'category_parent_id' =>
                    Category::all()->random()->id
            ];
        }
        else{
            return [
                'category_name' => fake()->name(),
                'category_slug' => fake()->slug(),
                'category_parent_id' => 0
            ];
        }

    }
}
