<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'post_id' => $this->id,
            'post_title' => $this->title,
            'post_body' => $this->content,
            'post_type' => $this->post_type,
            'meta_data' => $this->meta_data,
            'updated_at' => Carbon::parse($this->updated_at)->format('d/m/Y | H:m:s'),
            'category' => new CategoryResource($this->category),
            'author' => new UserResource($this->author),
            'images' => ImageResource::collection($this->images),
            'tags' => TagResource::collection($this->tags),
            'comments' => CommentResource::collection($this->comments),
        ];
    }
}
