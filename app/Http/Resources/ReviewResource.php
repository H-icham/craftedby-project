<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id'=> $this->resource->id,
            'rating'=> $this->resource->rating,
            'comment'=> $this->resource->comment,
            'user_id'=>$this->resource->user_id,
            'product_id'=>$this->resource->product_id,
        ];
    }
}
