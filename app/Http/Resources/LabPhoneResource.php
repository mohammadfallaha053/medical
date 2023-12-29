<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LabPhoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lab_phone_id'     =>   $this->lab_phone_id,
            'lc_id'             =>   $this->lc_id,
            'phone'            =>   $this->phone,
            //'lab'              =>   $this->lab,
        ];
    }

}
