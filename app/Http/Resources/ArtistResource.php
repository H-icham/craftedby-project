<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
//        return parent::toArray($request);
        return [
            'id'=> $this->resource->id,
            'siret'=> $this->resource->siret,
            'history'=> $this->resource->history,
            'craftingDescription'=> $this->resource->craftingDescription,
            'speciality_id'=>$this->resource->speciality_id,
            'user_id'=>$this->resource->user_id,
            'theme_id'=>$this->resource->theme_id,
        ];

    }
}
