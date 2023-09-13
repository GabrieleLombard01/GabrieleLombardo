<?php

namespace Database\Seeders;

use App\Models\Skills;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $skills = new Skills();
            $skills->save();
        }
    }
}
