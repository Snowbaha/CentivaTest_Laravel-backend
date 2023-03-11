<?php

namespace App\Http\Resources;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request|Team $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'users' => $this->users()->get()
        ];
    }
}
