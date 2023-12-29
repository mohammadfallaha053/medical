<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LaboratoryConstantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'lc_id'         =>  $this->lc_id ,
        'lab_name'      =>  $this->lab_name,
        'logo_image'     =>  $this->logo_image,
        'address'       =>  $this->address,
        'hospital_name' =>  $this->hospital_name,
        'email'         =>  $this->email,
        'price_of_unit' =>  $this->price_of_unit,
        'mange_name'    =>  $this->mange_name,
        'phones'        =>  LabPhoneResource::collection($this->whenLoaded('phones')),
    ];
    }
}
