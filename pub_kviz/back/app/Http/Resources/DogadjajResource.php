<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DogadjajResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'naziv'=>$this->naziv,
            'datum_odrzavanja' => $this->datum_odrzavanja,
           'timovi' => $this->timovi->map(function ($tim) {
            return new TimResource($tim, $tim->pivot->score); 
        }),
        ];
    }
}

