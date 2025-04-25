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
            'PHP',
            'Laravel',
            'MySQL',
            'JavaScript',
            'HTML',
            'CSS',
            'SASS',
            'Blade Templates',
            'jQuery',
            'AJAX',
            'JSON',
            'Git',
            'Composer',
            'PHPUnit',
            'Docker',
            'Node.js',
            'Express.js',
            'React',
            'Java',
            'JDBC',
            'Spring Boot',
            'Vue.js',
            'Tailwind CSS',
            'Bootstrap',
        ];

        foreach ($types as $type) {
            Type::updateOrCreate(
                ['slug' => $type],
                [
                    'name' => $type,
                    'category' => $faker->sentence(),
                ]
            );
        }
        
    }
}
