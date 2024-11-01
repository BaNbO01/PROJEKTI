<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TimResource extends JsonResource
{
    protected $score;

    public function __construct($resource, $score = null)
    {
        parent::__construct($resource);
        $this->score = $score; 
    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'tim_naziv' => $this->ime,
            'score' => $this->score, 
            'clanovi' => ClanResource::collection($this->clanovi), 
        ];
    }
}
