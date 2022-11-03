<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'followers_count' => $this->when(isset($this->followers_count), $this->followers_count),
            'followings_count' => $this->when(isset($this->followings_count), $this->followings_count),
            'is_followed' => $this->whenLoaded('is_followed') ? true : false,
        ];
    }
}
