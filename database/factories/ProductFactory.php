<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>'Scorpions',
            'cost'=>2.5,
            'image'=>'https://upload.wikimedia.org/wikipedia/commons/b/b6/Image_created_with_a_mobile_phone.png',
            //
        ];
    }
}
