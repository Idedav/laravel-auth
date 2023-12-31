<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $new_project = new Project();
            $new_project->name = $faker->sentence();
            $new_project->slug = Project::generateSlug($new_project->name);
            $new_project->description = $faker->paragraph();
            $new_project->save();
        }
    }
}
