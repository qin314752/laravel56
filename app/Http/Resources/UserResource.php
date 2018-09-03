<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\Video;
use App\Http\Resources\PostResource;
use App\Http\Resources\VideoResource;

class UserResource extends JsonResource
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
        'id' => $this->id,
        'name' => $this->name,
        'posts' => VideoResource::collection($this->whenLoaded('posts')),
        // 'posts' => VideoResource::collection(Video::all()),
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
    }
}
