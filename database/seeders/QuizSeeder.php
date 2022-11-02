<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::upsert([
            'id' => 1,
            'name' => 'Basic 500',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sapiente? Non at debitis doloribus placeat porro modi dignissimos voluptas a!',
        ], ['name'], ['description']);

        Quiz::upsert([
            'id' => 2,
            'name' => 'In a restaurant',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sapiente? Non at debitis doloribus placeat porro modi dignissimos voluptas a!',
        ], ['name'], ['description']);

        Quiz::upsert([
            'id' => 3,
            'name' => 'On a trip',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sapiente? Non at debitis doloribus placeat porro modi dignissimos voluptas a!',
        ], ['name'], ['description']);
    }
}
