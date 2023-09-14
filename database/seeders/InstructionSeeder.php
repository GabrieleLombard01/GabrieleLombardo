<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 3; $i++) {
            $instruction = new Instruction;
            $instruction->title = $faker->word();
            $instruction->description = $faker->paragraphs(5, true);
            $instruction->image = $faker->imageUrl(250, 250);
            $instruction->qualification_study = $faker->word();
            $instruction->course_study = $faker->word();
            $instruction->valuation = $faker->word();
            $instruction->start_date = $faker->dateTime();
            $instruction->end_date = $faker->dateTime();
            $instruction->save();
        }
    }
}
