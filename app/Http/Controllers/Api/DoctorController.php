<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DoctorPhoneController;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use App\Models\Doctor_phone;
use App\Models\DoctorPhone;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $doctor=Doctor::with('phones')->paginate(3);
        //return DoctorResource::collection($doctor);
        return  DoctorResource::collection(Doctor::with('phones')->paginate(5));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        $doctor= Doctor::create($request->all());
        /************************add phones for DoctorPhones table **********************************/
        $phones=$request->phones;
        if($phones) {
            $phones = explode(' ', $phones);
            foreach ($phones as $phone)
            DoctorPhone::create(['phone' => $phone,'d_id'=> $doctor->d_id]);
        }
        /******************************************************************/
        return  new DoctorResource($doctor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
     return new DoctorResource($doctor);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreDoctorRequest $request, Doctor $doctor)
    {
        $doctor->update($request->all());
        return new DoctorResource($doctor);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return response(null,\Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);
    }
}
