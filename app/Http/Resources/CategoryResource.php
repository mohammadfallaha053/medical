<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'c_id'            =>   $this->c_id,
            'category_name'   =>   $this->category_name,
            //'analyses'        =>   $this->analyses,
        ];
    }

}
