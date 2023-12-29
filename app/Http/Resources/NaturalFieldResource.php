<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NaturalFieldResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nf_id'  =>   $this->nf_id,
            'a_id'    =>   $this->a_id,
            'max'       =>   $this->max,
            'min'       =>   $this->min,
            //'analyses'   => AnalyseResource::collection($this->analyses),
        ];
    }

}
