<?php

namespace Database\Seeders;

use App\Models\UserAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAnswerSeed
{
    public function __construct($id, $user_id, $question_id, $user_answer, $quiz_id, $correct)
    {
        UserAnswer::create([
            'id'=> $id,
            'user_id'=>  $user_id,
            'question_id'=> $question_id,
            'user_answer'=>  $user_answer,
            'quiz_id'=>  $quiz_id,
            'correct'=>  $correct,
        ]);
    }
};

class UserAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAnswer::query()->delete();

        new UserAnswerSeed(1, 1, 1, 'Yes', 1, true);
        new UserAnswerSeed(2, 1, 2, 'Please', 1, false);
        new UserAnswerSeed(3, 1, 3, 'Please', 1, true);
        new UserAnswerSeed(4, 1, 4, 'Thank you', 1, true);
    }
}
