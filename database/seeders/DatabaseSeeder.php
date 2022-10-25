<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::query()->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Quiz::query()->delete();
        Question::query()->delete();

        User::factory(5)->create();

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

        Question::create([
            'id'=> 1,
            'title'=> "はい。",
            'choice_1'=> "Please",
            'choice_2'=> "Thank you",
            'choice_3'=> "Yes",
            'choice_4'=> "You are welcome",
            'correct_answer'=> "choice_3",
            'quiz_id'=> 1,
        ]);

        Question::create([
            'id'=> 2,
            'title'=> "いいえ",
            'choice_1'=> "Please",
            'choice_2'=> "No",
            'choice_3'=> "Yes",
            'choice_4'=> "You are welcome",
            'correct_answer'=> "choice_2",
            'quiz_id'=> 1,
        ]);

        Question::create([
            'id'=> 3,
            'title'=> "おねがいします。",
            'choice_1'=> "No",
            'choice_2'=> "Yes",
            'choice_3'=> "You are welcome",
            'choice_4'=> "Please",
            'correct_answer'=> "choice_4",
            'quiz_id'=> 1,
        ]);

        Question::create([
            'id'=> 4,
            'title'=> "ありがとう。",
            'choice_1'=> "Thank you",
            'choice_2'=> "No",
            'choice_3'=> "Yes",
            'choice_4'=> "You are welcome",
            'correct_answer'=> "choice_1",
            'quiz_id'=> 1,
        ]);

        Question::create([
            'id'=> 5,
            'title'=> "どういたしまして。",
            'choice_1'=> "No",
            'choice_2'=> "You are welcome",
            'choice_3'=> "Yes",
            'choice_4'=> "Thank you",
            'correct_answer'=> "choice_2",
            'quiz_id'=> 1,
        ]);
    }
}