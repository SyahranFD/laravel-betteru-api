<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'time' => $this->time,
            'kalori' => $this->kalori,
            'imageUrl' => $this->imageUrl,
            'videoUrl' => $this->videoUrl,
            'goals' => $this->goals,
        ];
    }
}
