<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function Seed($id, $title, $choice_1, $choice_2, $choice_3, $choice_4, $correct_answer, $quiz_id)
    {
        Question::upsert([
            'id' => $id,
            'title' => $title,
            'choice_1' => $choice_1,
            'choice_2' => $choice_2,
            'choice_3' => $choice_3,
            'choice_4' => $choice_4,
            'correct_answer' => $correct_answer,
            'quiz_id' => $quiz_id,
        ], ['quiz_id'], ['title', 'choice_1', 'choice_2', 'choice_3', 'choice_4', 'correct_answer']);
    }

    public function run()
    {
        $this->Seed(1, 'はい。', 'Please', 'Thank you', 'Yes', 'You are welcome', 'choice_3', 1);
        $this->Seed(2, 'いいえ', 'Please', 'No', 'Yes', 'You are welcome', 'choice_2', 1);
        $this->Seed(3, 'おねがいします。', 'No', 'Yes', 'You are welcome', 'Please', 'choice_4', 1);
        $this->Seed(4, 'ありがとう。', 'Thank you', 'No', 'Yes', 'You are welcome', 'choice_1', 1);
        $this->Seed(5, 'どういたしまして。', 'No', 'You are welcome', 'Yes', 'Thank you', 'choice_2', 1);

        $this->Seed(6, 'すみません', 'Water please', 'Refill, please', 'How much is this?', 'Excuse me', 'choice_4', 2);
        $this->Seed(7, 'これください', 'Water please', 'This one please', 'Refill, please', 'How much is this?', 'choice_2', 2);
        $this->Seed(8, 'いくらですか', 'How much is this?', 'Water please', 'Refill, please', 'This one please', 'choice_1', 2);
        $this->Seed(9, 'お水ください', 'Refill, please', 'How much is this?', 'Water please', 'This one please', 'choice_3', 2);
        $this->Seed(10, '大盛りお願いします', 'Refill, please', 'How much is this?', 'This one please', "I'd like a large portion", 'choice_4', 2);

        $this->Seed(11, 'はい。', 'Yes', 'Please', 'Thank you', 'You are welcome', 'choice_1', 3);
        $this->Seed(12, 'いいえ', 'Please', 'Yes', 'You are welcome', 'No', 'choice_4', 3);
        $this->Seed(13, 'おねがいします。', 'No', 'Please', 'Yes', 'You are welcome', 'choice_2', 3);
        $this->Seed(14, 'ありがとう。', 'Thank you', 'No', 'Yes', 'You are welcome', 'choice_1', 3);
        $this->Seed(15, 'どういたしまして。', 'No', 'Yes', 'Thank you', 'You are welcome', 'choice_4', 3);
    }
}
