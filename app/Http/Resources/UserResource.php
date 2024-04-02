<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'lastname'=> $this->resource->lastname,
            'firstname'=> $this->resource->firstname,
            'email'=> $this->resource->email,
            'password'=>$this->resource->password,
            'street'=> $this->resource->street,
            'postalcode'=> $this->resource->postalcode,
            'city'=> $this->resource->city,
            'countrycode'=> $this->resource->countrycode,
        ];
    }
}
