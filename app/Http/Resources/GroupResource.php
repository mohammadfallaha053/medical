<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'g_id'             =>   $this->g_id,
            'group_name'       =>   $this->group_name,
           // 'analyses'        =>    $this->analyses,
        ];
    }

}
