<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         \App\Models\Shop::factory()->create([
             'name' => fake()->name(),
             'latitude' => fake()->latitude(),
             'longitude' => fake()->longitude(),
         ]);
    }
}
