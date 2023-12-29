<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InsuranceCompaniesPhoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ic_phone_id'       =>   $this->ic_phone_id,
            'ic_id'        =>   $this->ic_id,
            'phone'      =>   $this->phone,
        ];
    }

}
