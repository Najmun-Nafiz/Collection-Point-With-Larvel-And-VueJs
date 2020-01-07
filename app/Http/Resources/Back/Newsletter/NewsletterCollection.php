<?php

namespace App\Http\Resources\Back\Newsletter;

use Illuminate\Http\Resources\Json\ResourceCollection;

class NewsletterCollection extends ResourceCollection
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
                    'facebook' => $customer->facebook,
                    'twitter' => $customer->twitter,
                    'linkedin' => $customer->linkedin,
                    'youtube' => $customer->youtube,
                    'instagram' => $customer->instagram,
                    'content' => $customer->content,
                    'status' => $customer->status,
                ];
            })
        ];
    }
}
