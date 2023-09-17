<?php

namespace Database\Seeders;

use App\Models\Experience;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $experience = new Experience();
            $experience->title = $faker->word();
            $experience->description = $faker->paragraphs(5, true);
            $experience->image = $faker->imageUrl(250, 250);
            $experience->qualification = $faker->word();
            $experience->contract = $faker->word();
            $experience->location = $faker->word();
            $experience->start_date = $faker->dateTime();
            $experience->end_date = $faker->dateTime();
            $experience->save();
        }
    }
}
