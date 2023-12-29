<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            't_id'  =>   $this->t_id,
            'p_id'    =>   $this->p_id,
            'd_id'  =>   $this->d_id,
            'ic_id'    =>   $this->ic_id,
            'test_date'       =>   $this->test_date,
            'discount'       =>   $this->discount,
            //'doctor'   => new DoctorResource($this->doctor),
            //'patient'   =>   $this->patient,
           // 'user'      =>  $this->user,
           // 'insurance_company'=>$this->insurance_company,
        ];
    }

}
