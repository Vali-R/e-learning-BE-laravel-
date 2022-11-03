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
    public function run()
    {
        ActivityLog::upsert([
            [
                'id' => 1,
                'relatable_id' => 1,
                'relatable_type' => Quiz::class,
                'user_id' => 1,
            ],
            [
                'id' => 5,
                'relatable_id' => 3,
                'relatable_type' => Follow::class,
                'user_id' => 1,
            ],
            [
                'id' => 7,
                'relatable_id' => 2,
                'relatable_type' => Follow::class,
                'user_id' => 1,
            ],
            [
                'id' => 8,
                'relatable_id' => 4,
                'relatable_type' => Follow::class,
                'user_id' => 1,
            ],
        ], ['user_id'], ['relatable_id', 'relatable_type']);
    }
}
