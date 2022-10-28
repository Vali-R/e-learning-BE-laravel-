<?php

namespace Database\Seeders;

use App\Models\ActivityLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityLogSeed
{
    public function __construct($id, $relatable_id, $relatable_type, $user_id)
    {
        ActivityLog::create([
            'id'=> $id,
            'relatable_id'=> $relatable_id,
            'relatable_type'=>  $relatable_type,
            'user_id'=>  $user_id,
        ]);
    }
};

class ActivityLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityLog::query()->delete();

        new ActivityLogSeed(1, 1, "App\Models\Quiz", 1);
        new ActivityLogSeed(5, 3, "App\Models\Follow", 1);
        new ActivityLogSeed(7, 2, "App\Models\Follow", 1);
        new ActivityLogSeed(8, 4, "App\Models\Follow", 1);
    }
}
