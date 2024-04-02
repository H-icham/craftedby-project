<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'totalPrice'=> $this->resource->totalPrice,
            'cartStatus'=> $this->resource->cartStatus,
            'date'=> $this->resource->date,
            'user_id'=>$this->resource->user_id,
        ];
    }
}
