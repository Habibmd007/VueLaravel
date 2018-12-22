<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'data' => $this->collection->transform(function($client){
                return[
                    'id'      => $client->id,
                    'name'    => $client->name,
                    'email'   => $client->email,
                    'mobile'  => $client->phone,
                    'address' => $client->address,
                    'total'   => $client->total,
                ];
            })
        ];
    }
}
