<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $store = $this->faker->words(2,true);
        return [
            'name' => $this->faker->name(),
            'phone'=> $this->faker->phoneNumber(),
            'about' => $this->faker->paragraph(2, true),
            'slug' => str()->of($store)->slug(),
            'logo' => $this->faker->imageUrl(),
        ];
    }
}
