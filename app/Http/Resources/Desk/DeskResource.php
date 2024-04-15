<?php

namespace App\Http\Resources\Desk;

use App\Http\Resources\DList\DListCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeskResource extends JsonResource
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
            'lists' => new DListCollection($this->lists)
        ];
    }
}
