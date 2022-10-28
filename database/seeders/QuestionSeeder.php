<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Mime\Encoder\QpEncoder;

class Seed
{
    public function __construct($id, $title, $choice_1, $choice_2, $choice_3, $choice_4, $correct_answer, $quiz_id)
    {
        Question::create([
            'id'=> $id,
            'title'=> $title,
            'choice_1'=>  $choice_1,
            'choice_2'=>  $choice_2,
            'choice_3'=>  $choice_3,
            'choice_4'=>  $choice_4,
            'correct_answer'=> $correct_answer,
            'quiz_id'=> $quiz_id,
        ]);
    }
};

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Question::query()->delete();

        new Seed(1, "はい。", "Please", "Thank you", "Yes", "You are welcome", "choice_3", 1);
        new Seed(2, "いいえ", "Please", "No", "Yes", "You are welcome", "choice_2", 1);
        new Seed(3, "おねがいします。", "No", "Yes", "You are welcome", "Please", "choice_4", 1);
        new Seed(4, "ありがとう。", "Thank you", "No", "Yes", "You are welcome", "choice_1", 1);
        new Seed(5, "どういたしまして。", "No", "You are welcome", "Yes", "Thank you", "choice_2", 1);

        new Seed(6, "すみません", "Water please", "Refill, please", "How much is this?", "Excuse me", "choice_4", 2);
        new Seed(7, "これください", "Water please", "This one please", "Refill, please", "How much is this?", "choice_2", 2);
        new Seed(8, "いくらですか", "How much is this?", "Water please", "Refill, please", "This one please", "choice_1", 2);
        new Seed(9, "お水ください", "Refill, please", "How much is this?", "Water please", "This one please", "choice_3", 2);
        new Seed(10, "大盛りお願いします", "Refill, please", "How much is this?", "This one please", "I'd like a large portion", "choice_4", 2);

        new Seed(11, "はい。", "Yes", "Please", "Thank you", "You are welcome", "choice_1", 3);
        new Seed(12, "いいえ", "Please", "Yes", "You are welcome", "No", "choice_4", 3);
        new Seed(13, "おねがいします。", "No", "Please", "Yes", "You are welcome", "choice_2", 3);
        new Seed(14, "ありがとう。", "Thank you", "No", "Yes", "You are welcome", "choice_1", 3);
        new Seed(15, "どういたしまして。", "No", "Yes", "Thank you", "You are welcome", "choice_4", 3);
    }
}
