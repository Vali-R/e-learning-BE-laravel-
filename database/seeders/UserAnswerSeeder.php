<?php

namespace Database\Seeders;

use App\Models\UserAnswer;
use Illuminate\Database\Seeder;

class UserAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAnswer::upsert([
            [
                'id' => 1,
                'user_id' => 1,
                'question_id' => 1,
                'user_answer' => 'Yes',
                'quiz_id' => 1,
                'correct' => true,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'question_id' => 2,
                'user_answer' => 'Please',
                'quiz_id' => 1,
                'correct' => false,
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'question_id' => 3,
                'user_answer' => 'Please',
                'quiz_id' => 1,
                'correct' => true,
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'question_id' => 4,
                'user_answer' => 'Thank you',
                'quiz_id' => 1,
                'correct' => true,
            ],
        ], ['user_id', 'quiz_id', 'question_id'], ['user_answer', 'correct']);
    }
}
