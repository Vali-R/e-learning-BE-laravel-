<?php

namespace Tests\Feature;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FollowTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUsersCanFollow()
    {
        $user = User::factory(2)->create();

        $response = $this->actingAs($user[0])->post("/api/follow/{$user[1]->id}");

        $response->assertStatus(200)
                    ->assertJson(['message' => 'Succesfully followed']);
    }

    public function testUsersCanUnfollow()
    {
        $user = User::factory(2)->create();
        Follow::create(['follower_id' => $user[0]->id, 'following_id' => $user[1]->id, 'flag' => true]);

        $response = $this->actingAs($user[0])->post("/api/follow/{$user[1]->id}");

        $response->assertStatus(200)
                    ->assertJson(['message' => 'Succesfully unfollowed']);
    }

    public function testUnaoutherizedUserCannotMakeRequestToFollow()
    {
        $response = $this->post('/api/follow/1', [], ['Accept' => 'application/json']);

        $response->assertStatus(401);
    }
}
