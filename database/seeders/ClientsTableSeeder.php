<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('clients')->insert([
                'client_name' => $faker->name,
                'Address' => $faker->streetAddress,
                'client_gender' => $faker->randomElement(['male', 'female']),
                'phone_number' => $faker->numerify('##########'),
            ]);
        }
    }
}
