<?php

namespace Database\Seeders;

use App\Models\UserLesson;
use Illuminate\Database\Seeder;

class UserLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserLesson::upsert([
            'id' => 1,
            'user_id' => 1,
            'quiz_id' => 1,
            'score' => 3,
        ], ['user_id', 'quiz_id'], ['score']);
    }
}
