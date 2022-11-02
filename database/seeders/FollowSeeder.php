<?php

namespace Database\Seeders;

use App\Models\Follow;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Follow::upsert([
            [
                'id' => 1,
                'follower_id' => 2,
                'following_id' => 3,
                'flag' => true,
            ],
            [
                'id' => 2,
                'follower_id' => 1,
                'following_id' => 2,
                'flag' => true,
            ],
            [
                'id' => 3,
                'follower_id' => 1,
                'following_id' => 4,
                'flag' => true,
            ],
            [
                'id' => 4,
                'follower_id' => 1,
                'following_id' => 5,
                'flag' => true,
            ],
        ], ['follower_id'], ['following_id', 'flag']);
    }
}
