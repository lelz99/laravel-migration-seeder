<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'rail_company' => 'Italo',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => date('H:i:s'),
                'arrival_time' => date('H:i:s'),
                'train_code' => rand(100000, 999999),
                'carriage' => rand(1,9),
                'on_time' => rand(0,1),
                'canceled' => rand(0,1),
            ],
            [
                'rail_company' => 'Frecciarossa',
                'departure_station' => 'Roma Tiburtina',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => date('H:i:s'),
                'arrival_time' => date('H:i:s'),
                'train_code' => rand(100000, 999999),
                'carriage' => rand(1,9),
                'on_time' => rand(0,1),
                'canceled' => rand(0,1),
            ],
        ];

        foreach($trains as $train){
            $new_train = new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
