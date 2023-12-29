<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'td_id'  =>   $this->td_id,
            't_id'   =>   $this->t_id,
            'a_id'   =>   $this->a_id,
            'result'  =>   $this->result,
        ];
    }

}
