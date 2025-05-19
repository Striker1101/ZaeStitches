<?php

namespace Database\Seeders;

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
            'password' => '123123'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'adminaccount@boxfi.uk',
            'password' => '123123',
            'role' => 'admin'
        ]);

        // Create 10 additional default users
        User::factory(10)->create();

        $this->call(
            [
                ColorSeeder::class,
                SizeSeeder::class,
                CategorySeeder::class,
                TagSeeder::class,
                BrandSeeder::class,
                ProductVariantSeeder::class,
                BlogSeeder::class,
                ProductSeeder::class, // Assuming you have this
                MediaSeeder::class,
                CartSeeder::class,
                CartItemSeeder::class,
                OrderSeeder::class,
                OrderItemSeeder::class
            ]
        );

    }

}
// /php artisan db:seed
//create migration, factory, seed, StoreReqeust,UpdateRequest, Modal
/**
 * create Blog modal
 * remember all it relationships
 */
