<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++)
        {
            $newTrain = new Train();
            $newTrain -> company = $faker->company();
            $newTrain -> departure_station = $faker -> randomElement(['Roma', 'Milano', 'Napoli', 'Bari']);
            $newTrain -> arrival_station = $faker -> randomElement(['Bologna','Firenze', 'Reggio Calabria', 'Ancona']);
            $newTrain -> daparute_datetime = $faker -> dateTimeBetween('+1 day', '-1 day','-1 week', '+1 week');
            $newTrain -> train_code ='AB' . $faker -> randomDigit();
            $newTrain -> wagons_number = $faker -> numberBetween(5, 12);
            $newTrain -> on_time = $faker -> boolean();
            $newTrain -> cancelled = $faker -> boolean();
            $newTrain -> save();
        }
    }
}
// ora ci dovrebbe essere
