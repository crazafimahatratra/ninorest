<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Agent;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agent::truncate();
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            $op = $faker->randomElement(['032', '033', '034']);
            Agent::create(['msisdn' => $op . $faker->randomNumber(7, true), "name" => $faker->firstname]);
        }
    }
}
