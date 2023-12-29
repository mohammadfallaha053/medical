<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IC_PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ic_patient_id'    => $this->ic_patient_id,
            'ic_id'            =>   $this->ic_id,
            'p_id'             =>   $this->p_id,
            'register_date'    => $this->register_date,
            'status'           => $this->status,
        ];
    }

}
