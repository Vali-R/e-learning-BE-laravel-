<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Quiz::query()->delete();

        Quiz::create([
            'id'=> 1,
            'name'=> "Basic 500",
            'description'=>
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sapiente? Non at debitis doloribus placeat porro modi dignissimos voluptas a!",
        ]);

        Quiz::create([
            'id'=> 2,
            'name'=> "In a restaurant",
            'description'=>
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sapiente? Non at debitis doloribus placeat porro modi dignissimos voluptas a!",
        ]);

        Quiz::create([
            'id'=> 3,
            'name'=> "On a trip",
            'description'=>
              "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sapiente? Non at debitis doloribus placeat porro modi dignissimos voluptas a!",
        ]);
    }
}
