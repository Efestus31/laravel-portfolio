<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            'Web Development',
            'Mobile App Development',
            'Database Management',
            'Software Engineering',
            'Game Development',
            'UI/UX Design',
            'Data Science',
            'Machine Learning',
            'Cybersecurity',
            'Cloud Computing',
            'Blockchain',
            'DevOps',
            'AI/Automation',
            'IoT (Internet of Things)',
            'Digital Marketing'
        ];

        foreach ($types as $type) {
            Type::updateOrCreate(
                [
                    'name' => $type,
                    'category' => $faker->sentence(),
                ]
            );
        }
        
    }
}
