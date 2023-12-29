<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'p_id'        =>   $this->p_id,
            'first_name'  =>   $this->first_name,
            'last_name'   =>   $this->last_name,
            'phone'       =>   $this->phone,
            'gender'      =>   $this->gender,
            'birthday'    =>   $this->birthday,
            'national_id' =>   $this->national_id,
            //'insuranceCompanies' =>$this->insuranceCompanies,
        ];
    }

}
