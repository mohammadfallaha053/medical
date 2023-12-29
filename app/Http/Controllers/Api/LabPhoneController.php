<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLabPhoneRequest;
use App\Http\Resources\LabPhoneResource;
use App\Models\LabPhone;

class LabPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lab_phone=LabPhone::paginate(5);
        return LabPhoneResource::collection($lab_phone);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLabPhoneRequest $request)
    {
        $labPhone= LabPhone::create($request->all());
        return new LabPhoneResource($labPhone);
    }

    /**
     * Display the specified resource.
     */
    public function show(LabPhone $labPhone)
    {
        return new LabPhoneResource($labPhone);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreLabPhoneRequest $request,LabPhone $labPhone)
    {
        $labPhone->update($request->all());
        return new LabPhoneResource($labPhone);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LabPhone $labPhone)
    {
        $labPhone->delete();
        return response(null,204);
    }
}
