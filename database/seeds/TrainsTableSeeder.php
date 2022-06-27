<?php

use Faker\Generator as Faker;
use App\Train;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker){

        for($i=0; $i <50; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->depart_station = $faker->city();
            $newTrain->arrive_station =$faker->city();
            $newTrain->depart_time = $faker->time();
            $newTrain->arrive_time = $faker->time();
            $newTrain->train_number = $faker->randomNumber(4, true);
            $newTrain->n_carriage = $faker->randomDigit();
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }

    // =============== SENZA FAKER==================


    // public function run()
    // {
    //     $trains = 
    //     [
    //         [
    //             'company' => 'TrenIt',
    //             'depart_station' => 'Bologna Centrale',
    //             'arrive_station' => 'Roma Termini',
    //             'depart_time' => '18:02',
    //             'arrive_time' => '20:25',
    //             'train_number' => 9978,
    //             'n_carriage' => 3,
    //             'in_time' => 1
    //         ],
    //         [
    //             'company' => 'Italo',
    //             'depart_station' => 'Verona Porta Nuova',
    //             'arrive_station' => 'Milano Centrale',
    //             'depart_time' => '19:12',
    //             'arrive_time' => '20:25',
    //             'train_number' => 9275,
    //             'n_carriage' => 2,
    //             'in_time' => 1
    //         ],
    //         [
    //             'company' => 'Reg Trenord',
    //             'depart_station' => 'Firenze Santa Maria Novella',
    //             'arrive_station' => 'Napoli Centrale',
    //             'depart_time' => '18:43',
    //             'arrive_time' => '21:43',
    //             'train_number' => 2646,
    //             'n_carriage' => 1,
    //             'in_time' => 1
    //         ],
    //         [
    //             'company' => 'Freccia',
    //             'depart_station' => 'Milano Centrale',
    //             'arrive_station' => 'Bari Centrale',
    //             'depart_time' => '18:43',
    //             'arrive_time' => '21:43',
    //             'train_number' => 2546,
    //             'n_carriage' => 1,
    //             'in_time' => 0
    //         ],
            
    
    //     ];

    //     foreach($trains as $train){
    //         $newTrain = new Train();
    //         $newTrain->company = $train['company'];
    //         $newTrain->depart_station = $train['depart_station'];
    //         $newTrain->arrive_station = $train['arrive_station'];
    //         $newTrain->depart_time = $train['depart_time'];
    //         $newTrain->arrive_time = $train['arrive_time'];
    //         $newTrain->train_number = $train['train_number'];
    //         $newTrain->n_carriage = $train['n_carriage'];
    //         $newTrain->in_time = $train['in_time'];
    //         $newTrain->save();
    //     }
    // }


}
