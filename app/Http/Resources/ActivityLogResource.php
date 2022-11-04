<?php

namespace App\Http\Resources;

use App\Models\Follow;
use App\Models\Quiz;
use App\Models\Unfollow;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ActivityLogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $subject = Auth::id() === $this->user_id ? 'You' : $this->user->first_name;

        switch ($this->relatable_type) {
            case Quiz::class:
                return collect(['activity' => "{$subject} learned {$this->relatable->name}", 'timestamp' => $this->updated_at]);
            case Follow::class:
                return collect(['activity' => "{$subject} followed {$this->relatable->following()->first()->first_name}", 'timestamp' => $this->updated_at]);
            case Unfollow::class:
                return collect(['activity' => "{$subject} unfollowed {$this->relatable->unfollowing()->first()->first_name}", 'timestamp' => $this->updated_at]);
        }
    }
}
