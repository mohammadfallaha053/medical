<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnalyseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'a_id'             => $this->a_id,
            'name'       =>   $this->name,
            'g_id'         =>   $this->g_id,
            'c_id'         =>   $this->c_id,
            // 'category'   => new CategoryResource($this->category),
            // 'group'      => new GroupResource($this->group),
        ];
    }

}
