<?php

use Illuminate\Database\Seeder;
use App\Vacation;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //creare tot vacanze nella tabella vacations
        for($i = 0; $i < 5; $i++){
            //dati di una vacanza "esempio"
            $new_vacation = new Vacation();
            $new_vacation->title = $faker->city();
            $new_vacation->country = $faker->state();
            $new_vacation->duration = '10' . 'days';
            $new_vacation->save();
        }
    }
}
