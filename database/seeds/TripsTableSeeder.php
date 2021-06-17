<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_trip = new Trip();
            $new_trip->city = $faker->city();
            $new_trip->country = $faker->country();
            $new_trip->travel_days = $faker->numberBetween(1, 30);
            $new_trip->price = $faker->randomFloat(2, 100, 10000);
            $new_trip->save();
        }
    }
}
