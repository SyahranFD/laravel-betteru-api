<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            'kalori' => $this->kalori,
            'protein' => $this->protein,
            'lemak' => $this->lemak,
            'karbohidrat' => $this->karbohidrat,
            'note' => $this->note,
            'imageUrl' => $this->imageUrl,
            'videoUrl' => $this->videoUrl,
            'time' => $this->time,
            'goals' => $this->goals,
            'click_count' => $this->click_count,
        ];
    }
}
