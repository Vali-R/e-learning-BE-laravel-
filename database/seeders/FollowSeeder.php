<?php

namespace Database\Seeders;

use App\Models\Follow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowSeed
{
    public function __construct($id, $follower_id, $following_id, $flag)
    {
        Follow::create([
            'id'=> $id,
            'follower_id'=> $follower_id,
            'following_id'=>  $following_id,
            'flag'=>  $flag,
        ]);
    }
};

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Follow::query()->delete();

        new FollowSeed(1, 2, 3, true);
        new FollowSeed(2, 1, 2, true);
        new FollowSeed(3, 1, 4, true);
        new FollowSeed(4, 1, 5, true);
    }
}
