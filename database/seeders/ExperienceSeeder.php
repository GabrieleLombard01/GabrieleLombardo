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
        for ($i = 1; $i <= 3; $i++) {
            $experience = new Experience();
            $experience->save();
        }
    }
}
