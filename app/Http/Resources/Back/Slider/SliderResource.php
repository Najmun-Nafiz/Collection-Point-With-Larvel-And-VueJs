<?php

namespace App\Http\Resources\Back\Slider;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
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
                'generation' => $this->generation,
                'image' => $this->image,
                'status' => $this->status
            ];
    }
}
