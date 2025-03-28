<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //este es un nested resource porque eesta dentro de un metodo
        return [
            'id' => $this->id,
            'user' => UserResource::make($this->user),
            'title' => $this->title,
            'body' => $this->body,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}
