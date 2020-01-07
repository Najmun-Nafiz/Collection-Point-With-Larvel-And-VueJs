<?php

namespace App\Http\Resources\Back\Visitor;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VisitorCollection extends ResourceCollection
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
                    'email' => $customer->email,
                    'password' => $customer->password,
                    'image' => $customer->image
                ];
            })
        ];
    }
}
