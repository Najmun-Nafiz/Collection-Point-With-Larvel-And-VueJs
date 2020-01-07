<?php

namespace App\Http\Resources\Back\Event;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
                'id' => $this->id,
                'category_id' => $this->category_id,
                'title' => $this->title,
                'description' => $this->description,
                'rating' => $this->rating,
                'image' => $this->image,
                'status' => $this->status
            ];
    }
}
