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
            $instruction->save();
        }
    }
}
