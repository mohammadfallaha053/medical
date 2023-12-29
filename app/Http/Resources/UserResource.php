<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'u_id'             =>   $this->u_id,
            'user_name'        =>   $this->user_name,
            'first_name'       =>   $this->first_name,
            'last_name'        =>   $this->last_name,
            'email'           =>   $this->email,
            'phone'           =>  $this->phone,
            'password'           =>  $this->password,
        ];
    }

}
