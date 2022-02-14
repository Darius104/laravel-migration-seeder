<?php

use Illuminate\Database\Seeder;
use App\Vacation;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creare tot vacanze nella tabella vacations
        for($i = 0; $i < 5; $i++){
            $new_vacation = new Vacation();
            $new_vacation->title = 'Titolo' . $i;
            $new_vacation->country = 'Paeseeee' . $i;
            $new_vacation->duration = '10' . 'days';
            $new_vacation->save();
        }
    }
}
