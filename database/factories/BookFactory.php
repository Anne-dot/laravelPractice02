<?php

namespace Database\Factories;

use Bezhanov\Faker\ProviderCollectionHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        ProviderCollectionHelper::addAllProvidersTo($this->faker);

        return [
            'title' => $this->faker->medicine,
            'release_date' => $this->faker->year,
            'cover_path' => $this->faker->placeholder(),
            'price' => $this->faker->randomFloat(4, 3, 100),
            'stock_saldo'=>$this->faker->numberBetween(0,50),
            'pages'=>$this->faker->numberBetween(5,1000),
            'type'=>$this->faker->randomElement(['new', 'used', 'ebook'])

        ];
    }
}
