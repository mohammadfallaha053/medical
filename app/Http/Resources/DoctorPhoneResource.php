<?php

namespace App\Http\Resources;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorPhoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Phone_id'    =>    $this->d_Phone_id,
            'd_id'          =>    $this->d_id,
            'phone'         =>    $this->phone,
            'doctor'       =>   $this->doctor->first_name.' '.$this->doctor->last_name,
        ];
    }

}
