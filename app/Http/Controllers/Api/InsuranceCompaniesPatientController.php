<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIC_PatientRequest;
use App\Http\Resources\IC_PatientResource;
use App\Models\InsuranceCompaniesPatient;
use Illuminate\Http\Request;

class InsuranceCompaniesPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return IC_PatientResource::collection(InsuranceCompaniesPatient::paginate(5));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIC_PatientRequest $request)
    {
        $ic_patient=InsuranceCompaniesPatient::create($request->all());
        return $ic_patient;

    }

    /**
     * Display the specified resource.
     */
    public function show(InsuranceCompaniesPatient $ic_patient)
    {
        return $ic_patient;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
