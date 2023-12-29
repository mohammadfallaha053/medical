<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorPhoneRequest;
use App\Http\Resources\DoctorPhoneResource;
use App\Models\DoctorPhone;

class DoctorPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctorPhone=DoctorPhone::paginate(5);
        return DoctorPhoneResource::collection($doctorPhone);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorPhoneRequest $request)
    {
        $DoctorPhone= DoctorPhone::create($request->all());
        return new DoctorPhoneResource($DoctorPhone);
    }

    /**
     * Display the specified resource.
     */
    public function show(DoctorPhone $doctorPhone)
    {
        return new DoctorPhoneResource($doctorPhone);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDoctorPhoneRequest $request, DoctorPhone $doctorPhone)
    {
        $doctorPhone->update($request->all());
        return new DoctorPhoneResource($doctorPhone);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DoctorPhone $doctorPhone)
    {
        $doctorPhone->delete();
        return response(null,\Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);
    }
}
