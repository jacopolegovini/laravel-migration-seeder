<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;


class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i <= 10; $i++) {
            $newTicket = new Ticket();
            $newTicket->user_name = $faker->name();
            $newTicket->train_number = $faker->numberBetween(11111, 99999);
            $newTicket->departure_date = $faker->dateTimeInInterval('-1 week', '+3 days');
            $newTicket->departure_time = $faker->time();
            $newTicket->save();
        }
    }
}
