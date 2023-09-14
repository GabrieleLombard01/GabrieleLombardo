<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $project = new Project();
            $project->title = $faker->word();
            $project->content = $faker->paragraphs(5, true);
            $project->slug = Str::slug($project->title, '-');
            $project->image = $faker->imageUrl(250, 250);
            $project->save();
        }
    }
}
