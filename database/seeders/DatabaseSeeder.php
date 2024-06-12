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

        User::create(
            [
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'password' => bcrypt('test123'),
                'role'=> 1
            ]
            );
        $this->call([
            FleetSeeder::class,
            DriverSeeder::class,
            RouteSeeder::class,
            TripSeeder::class,
        ]);
    }
}