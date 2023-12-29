<?php

namespace App\Http\Resources;

use App\Models\Doctor_phone;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'd_id'             =>   $this->d_id,
            'first_name'       =>   $this->first_name,
            'last_name'        =>   $this->last_name,
            'gender'           =>   $this->gender,
            'Specialization'   =>   $this->Specialization,
            'phones'           => DoctorPhoneResource::collection($this->phones),
        ];
    }

}
