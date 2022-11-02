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
    public function FollowSeed($id, $follower_id, $following_id, $flag)
    {
        Follow::upsert([
            'id' => $id,
            'follower_id' => $follower_id,
            'following_id' => $following_id,
            'flag' => $flag,
        ], ['follower_id'], ['following_id', 'flag']);
    }

    public function run()
    {
        Follow::query()->delete();

        $this->FollowSeed(1, 2, 3, true);
        $this->FollowSeed(2, 1, 2, true);
        $this->FollowSeed(3, 1, 4, true);
        $this->FollowSeed(4, 1, 5, true);
    }
}
