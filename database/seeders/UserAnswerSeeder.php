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
    public function UserAnswerSeed($id, $user_id, $question_id, $user_answer, $quiz_id, $correct)
    {
        UserAnswer::upsert([
            'id' => $id,
            'user_id' => $user_id,
            'question_id' => $question_id,
            'user_answer' => $user_answer,
            'quiz_id' => $quiz_id,
            'correct' => $correct,
        ], ['user_id', 'quiz_id', 'question_id'], ['user_answer', 'correct']);
    }

    public function run()
    {
        $this->UserAnswerSeed(1, 1, 1, 'Yes', 1, true);
        $this->UserAnswerSeed(2, 1, 2, 'Please', 1, false);
        $this->UserAnswerSeed(3, 1, 3, 'Please', 1, true);
        $this->UserAnswerSeed(4, 1, 4, 'Thank you', 1, true);
    }
}
