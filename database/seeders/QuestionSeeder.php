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
    public function run()
    {
        Question::upsert([
            [
                'id' => 1,
                'title' => 'はい。',
                'choice_1' => 'Please',
                'choice_2' => 'Thank you',
                'choice_3' => 'Yes',
                'choice_4' => 'You are welcome',
                'correct_answer' => 'choice_3',
                'quiz_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'いいえ',
                'choice_1' => 'Please',
                'choice_2' => 'No',
                'choice_3' => 'Yes',
                'choice_4' => 'You are welcome',
                'correct_answer' => 'choice_2',
                'quiz_id' => 1,
            ],
            [
                'id' => 3,
                'title' => 'おねがいします。',
                'choice_1' => 'No',
                'choice_2' => 'Yes',
                'choice_3' => 'You are welcome',
                'choice_4' => 'Please',
                'correct_answer' => 'choice_4',
                'quiz_id' => 1,
            ],
            [
                'id' => 4,
                'title' => 'ありがとう。',
                'choice_1' => 'Thank you',
                'choice_2' => 'No',
                'choice_3' => 'Yes',
                'choice_4' => 'You are welcome',
                'correct_answer' => 'choice_1',
                'quiz_id' => 1,
            ],
            [
                'id' => 5,
                'title' => 'どういたしまして。',
                'choice_1' => 'No',
                'choice_2' => 'You are welcome',
                'choice_3' => 'Yes',
                'choice_4' => 'Thank you',
                'correct_answer' => 'choice_2',
                'quiz_id' => 1,
            ],
            [
                'id' => 6,
                'title' => 'すみません',
                'choice_1' => 'Water please',
                'choice_2' => 'Refill, please',
                'choice_3' => 'How much is this?',
                'choice_4' => 'Excuse me',
                'correct_answer' => 'choice_4',
                'quiz_id' => 2,
            ],
            [
                'id' => 7,
                'title' => 'これください',
                'choice_1' => 'Water please',
                'choice_2' => 'This one please',
                'choice_3' => 'Refill, please',
                'choice_4' => 'How much is this?',
                'correct_answer' => 'choice_2',
                'quiz_id' => 2,
            ],
            [
                'id' => 8,
                'title' => 'いくらですか',
                'choice_1' => 'How much is this?',
                'choice_2' => 'Water please',
                'choice_3' => 'Refill, please',
                'choice_4' => 'This one please',
                'correct_answer' => 'choice_1',
                'quiz_id' => 2,
            ],
            [
                'id' => 9,
                'title' => 'お水ください',
                'choice_1' => 'Refill, please',
                'choice_2' => 'How much is this?',
                'choice_3' => 'Water please',
                'choice_4' => 'This one please',
                'correct_answer' => 'choice_3',
                'quiz_id' => 2,
            ],
            [
                'id' => 10,
                'title' => '大盛りお願いします',
                'choice_1' => 'Refill, please',
                'choice_2' => 'How much is this?',
                'choice_3' => 'This one please',
                'choice_4' => "I'd like a large portion",
                'correct_answer' => 'choice_4',
                'quiz_id' => 2,
            ],
            [
                'id' => 11,
                'title' => 'はい。',
                'choice_1' => 'Yes',
                'choice_2' => 'Please',
                'choice_3' => 'Thank you',
                'choice_4' => 'You are welcome',
                'correct_answer' => 'choice_1',
                'quiz_id' => 3,
            ],
            [
                'id' => 12,
                'title' => 'いいえ',
                'choice_1' => 'Please',
                'choice_2' => 'Yes',
                'choice_3' => 'You are welcome',
                'choice_4' => 'No',
                'correct_answer' => 'choice_4',
                'quiz_id' => 3,
            ],
            [
                'id' => 13,
                'title' => 'おねがいします。',
                'choice_1' => 'No',
                'choice_2' => 'Please',
                'choice_3' => 'Yes',
                'choice_4' => 'You are welcome',
                'correct_answer' => 'choice_2',
                'quiz_id' => 3,
            ],
            [
                'id' => 14,
                'title' => 'ありがとう。',
                'choice_1' => 'Thank you',
                'choice_2' => 'No',
                'choice_3' => 'Yes',
                'choice_4' => 'You are welcome',
                'correct_answer' => 'choice_1',
                'quiz_id' => 3,
            ],
            [
                'id' => 15,
                'title' => 'どういたしまして。',
                'choice_1' => 'No',
                'choice_2' => 'Yes',
                'choice_3' => 'Thank you',
                'choice_4' => 'You are welcome',
                'correct_answer' => 'choice_4',
                'quiz_id' => 3,
            ],
        ], ['quiz_id'], ['title', 'choice_1', 'choice_2', 'choice_3', 'choice_4', 'correct_answer']);
    }
}
