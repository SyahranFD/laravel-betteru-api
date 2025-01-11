<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DailyWaterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'amount' => number_format($this->amount / 1000, 1),
            'total_glasses' => intval($this->amount / 200),
            'date' => $this->date,
        ];
    }
}
