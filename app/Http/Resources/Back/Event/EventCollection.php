<?php

namespace App\Http\Resources\Back\Event;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EventCollection extends ResourceCollection
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
                    'description' => $customer->description,
                    'rating' => $customer->rating,
                    'image' => $customer->image,
                    'status' => $customer->status
                ];
            })
        ];
    }
}
