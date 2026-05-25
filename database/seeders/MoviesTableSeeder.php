<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::truncate();
        $faker =\Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Movie::create([
                'title' => $faker->sentence,
                'synopsis' =>$faker->paragraph,
                'year' => $faker->randomDigit,
                'cover' => $faker->sentence,
            ]);
        }
    }
}
