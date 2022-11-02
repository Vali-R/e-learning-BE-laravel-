<?php

namespace Database\Seeders;

use App\Models\ActivityLog;
use App\Models\Follow;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class ActivityLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function ActivityLogSeed($id, $relatable_id, $relatable_type, $user_id)
    {
        ActivityLog::upsert([
            'id' => $id,
            'relatable_id' => $relatable_id,
            'relatable_type' => $relatable_type,
            'user_id' => $user_id,
        ], ['user_id'], ['relatable_id', 'relatable_type']);
    }

    public function run()
    {
        $this->ActivityLogSeed(1, 1, Quiz::class, 1);
        $this->ActivityLogSeed(5, 3, Follow::class, 1);
        $this->ActivityLogSeed(7, 2, Follow::class, 1);
        $this->ActivityLogSeed(8, 4, Follow::class, 1);
    }
}
