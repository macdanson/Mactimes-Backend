<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'img_id' => $this->id,
            'img_desc' => $this->description,
            'img_url' => asset($this->url),
            'post_id' => $this->post_id,
            'is_featured' => $this->featured,
        ];
    }
}
