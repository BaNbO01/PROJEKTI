<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SezonaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pocetak' => $this->pocetak,
            'kraj' => $this->kraj,
            'dogadjaji' => DogadjajResource::collection($this->dogadjaji), // Koristimo DogadjajResource
        ];
    }
}
