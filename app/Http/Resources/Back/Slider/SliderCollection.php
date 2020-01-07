<?php

namespace App\Http\Resources\Back\Slider;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SliderCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($customer){
                return[
                    'id' => $customer->id,
                    'category_id' => $customer->category_id,
                    'title' => $customer->title,
                    'generation' => $customer->generation,
                    'image' => $customer->image,
                    'status' => $customer->status
                ];
            })
        ];
    }
}
