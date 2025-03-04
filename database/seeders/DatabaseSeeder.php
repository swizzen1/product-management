<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@example.com')->exists()) {
                User::factory()->create([
                    'name' => 'Admin',
                    'email' => 'admin@example.com',
                    'password' => bcrypt('12345678'),
                ]);
         }

        Product::factory(20)->create();

    }
}
