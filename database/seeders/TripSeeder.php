<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\SeedingTrait;
use Illuminate\Database\Seeder;
use App\Models\Trip; // Replace with your actual model path if different
use Carbon\Carbon;

class TripSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
                'fleet_id' => 1,
                'route_id' => 1,
                'driver_id' => 1,
                'departure_time' => Carbon::now()->addDays(1)->addHours(8),
                'arrival_time' => Carbon::now()->addDays(1)->addHours(10),
                'capacity' => 35,
                'status' => 'scheduled',
            ],
            [
                'fleet_id' => 2,
                'route_id' => 2,
                'driver_id' => 2,
                'departure_time' => Carbon::now()->addDays(2)->addHours(10),
                'arrival_time' => Carbon::now()->addDays(2)->addHours(12),
                'capacity' => 12,
                'status' => 'scheduled',
            ],
            [
                'fleet_id' => 3,
                'route_id' => 3,
                'driver_id' => 3,
                'departure_time' => Carbon::now()->subDays(1)->addHours(14),
                'arrival_time' => Carbon::now()->subDays(1)->addHours(17),
                'capacity' => 48,
                'status' => 'completed',
            ],
            [
                'fleet_id' => 4,
                'route_id' => 4,
                'driver_id' => 4,
                'departure_time' => Carbon::now()->addDays(3)->addHours(9),
                'arrival_time' => Carbon::now()->addDays(3)->addHours(11),
                'capacity' => 20,
                'status' => 'scheduled',
            ],
            [
                'fleet_id' => 5,
                'route_id' => 5,
                'driver_id' => 5,
                'departure_time' => Carbon::now()->addDays(4)->addHours(13),
                'arrival_time' => Carbon::now()->addDays(4)->addHours(15),
                'capacity' => 30,
                'status' => 'scheduled',
            ],
            [
                'fleet_id' => 6,
                'route_id' => 6,
                'driver_id' => 6,
                'departure_time' => Carbon::now()->subDays(2)->addHours(16),
                'arrival_time' => Carbon::now()->subDays(2)->addHours(18),
                'capacity' => 40,
                'status' => 'completed',
            ],
            [
                'fleet_id' => 7,
                'route_id' => 7,
                'driver_id' => 7,
                'departure_time' => Carbon::now()->addDays(5)->addHours(7),
                'arrival_time' => Carbon::now()->addDays(5)->addHours(9),
                'capacity' => 25,
                'status' => 'scheduled',
            ],
            [
                'fleet_id' => 8,
                'route_id' => 8,
                'driver_id' => 8,
                'departure_time' => Carbon::now()->addDays(6)->addHours(11),
                'arrival_time' => Carbon::now()->addDays(6)->addHours(13),
                'capacity' => 18,
                'status' => 'scheduled',
            ],
            [
                'fleet_id' => 9,
                'route_id' => 9,
                'driver_id' => 9,
                'departure_time' => Carbon::now()->subDays(3)->addHours(10),
                'arrival_time' => Carbon::now()->subDays(3)->addHours(12),
                'capacity' => 50,
                'status' => 'completed',
            ],

        ];

        foreach ($trips as $trip) {
            Trip::create($trip);
        }
    }
}