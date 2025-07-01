<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::factory()->create([
            'product' => 'Jabon de Baño',
            'price' => '5.00',
            'description' => 'Producto de baño',
        ]);

          Product::factory()->create([
            'product' => 'Cereal',
            'price' => '10.30',
            'description' => 'Producto Comestible',
        ]);

        Product::factory()->create([
            'product' => 'Zanahoria',
            'price' => '8.00',
            'description' => 'Vegetales',
        ]);
    }
}
