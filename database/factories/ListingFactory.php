<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'tags' => 'laravel, javascript, php',
            'company' => $this->faker->company,
            'location' => $this->faker->city,
            'salary' => $this->faker->numberBetween(50000, 100000),
            'description' => $this->faker->paragraphs(3, true),
            'email' => $this->faker->companyEmail,
            'url' => $this->faker->url,
        ];
    }
}