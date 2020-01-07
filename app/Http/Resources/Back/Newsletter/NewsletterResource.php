<?php

namespace App\Http\Resources\Back\Newsletter;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsletterResource extends JsonResource
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
                'facebook' => $this->facebook,
                'twitter' => $this->twitter,
                'linkedin' => $this->linkedin,
                'youtube' => $this->youtube,
                'instagram' => $this->instagram,
                'content' => $this->content,
                'status' => $this->status,
            ];
    }
}
