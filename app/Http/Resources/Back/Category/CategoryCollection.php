<?php

namespace App\Http\Resources\Back\Category;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
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
                    'name' => $customer->name,
                    'status' => $customer->status,
                ];
            })
        ];
    }
}
