<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 400; $i++) {
           $train = new Train();

           $arrTrains = [
            'Azienda' => $faker->company(),
            'StazionePartenza' => $faker->state(),
            'DataPartenza' => $faker->date(),
            'OrarioPartenza' => $faker->time('H:i'),
            'StazioneArrivo' => $faker->state(),
            'DataArrivo' => $faker->date(),
            'OrarioArrivo' => $faker->time('H:i'),
            'CodiceTreno' => $faker->regexify('[A-Z]{3}[0-4]{3}'),
            'NumeroCarrozze' => $faker->randomNumber(2, true),
            'InOrario' => $faker->numberBetween(0, 1),
            'Cancellato' => $faker->numberBetween(0, 1)
           ];

           $train->fill($arrTrains);
           $train->save();
        }
    }
}
