<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){

            $newProject = new Project();

            $newProject->name = $faker->sentence(3);
            $newProject->client = $faker->name();
            $newProject->period = $faker->dateTimeBetween('now', '+1 week')->format('Y-m-d'); 
            $newProject->summary = $faker->paragraph(12);
            $newProject->type_id = rand(1, 15);
            $newProject->save();

        }
    }
}
