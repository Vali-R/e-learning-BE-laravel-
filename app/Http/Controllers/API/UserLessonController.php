<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserLessonController extends Controller
{
    public function get_learnings_count(User $user)
    {
        $learned_lessons_count = $user->user_lessons()->get()->count();
        $learned_words_count = $user->user_answers()->correct()->get()->count();

        return response()->json(['learnins_count' => ['learned_lessons_count' => $learned_lessons_count, 'learned_words_count' => $learned_words_count]]);
    }
}
