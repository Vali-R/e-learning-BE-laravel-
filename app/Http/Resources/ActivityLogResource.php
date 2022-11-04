<?php

namespace App\Http\Resources;

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

        switch ($this->title) {
            case 'quiz':
                return collect(['activity' => "{$subject} learned {$this->relatable->name}", 'timestamp' => $this->updated_at]);
            case 'follow':
                return collect(['activity' => "{$subject} followed {$this->relatable->following()->first()->first_name}", 'timestamp' => $this->updated_at]);
            case 'unfollow':
                return collect(['activity' => "{$subject} unfollowed {$this->relatable->following()->first()->first_name}", 'timestamp' => $this->updated_at]);
        }
    }
}
