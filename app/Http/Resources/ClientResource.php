<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'name'    => $this->name,
            'email'   => $this->email,
            'mobile'  => $this->phone,
            'address' => $this->address,
            'total'   => $this->total,
        ];
    }
}
