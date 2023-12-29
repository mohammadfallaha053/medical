<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients=Patient::paginate(20);
        return PatientResource::collection($patients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        $patient= Patient::create($request->all());
        return new PatientResource($patient);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return new PatientResource($patient);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return new PatientResource($patient);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response(null,\Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);
    }
}
