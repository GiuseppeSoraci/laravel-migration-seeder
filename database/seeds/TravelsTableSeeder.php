<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {

            $new_travel = new Travel();

            $new_travel->city = 'City';
            $new_travel->hotel = 'Hotel';
            $new_travel->transportation = 'Transports';
            $new_travel->description = 'Lorem ipsum description';
            $new_travel->price = rand(100, 1000);

            $new_travel->save();
        }
    }
}
