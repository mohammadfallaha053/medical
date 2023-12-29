<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInsuranceCompaniesPhoneRequest;
use App\Http\Resources\InsuranceCompaniesPhoneResource;
use App\Models\InsuranceCompaniesPhone;

class InsuranceCompaniesPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return InsuranceCompaniesPhoneResource::collection(InsuranceCompaniesPhone::paginate(5));
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInsuranceCompaniesPhoneRequest $request)
    {
        $ic_phone=InsuranceCompaniesPhone::create($request->all());
        return new InsuranceCompaniesPhoneResource($ic_phone);
    }

    /**
     * Display the specified resource.
     */
    public function show(InsuranceCompaniesPhone $ic_phone)
    {
        return new InsuranceCompaniesPhoneResource($ic_phone);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreInsuranceCompaniesPhoneRequest $request, Insurance_companies $insuranceCompany)
    {
        $insuranceCompany->update($request->all());
        return new InsuranceCompaniesPhoneResource($insuranceCompany);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsuranceCompaniesPhone $insuranceCompany)
    {
         $insuranceCompany->delete();
        return response(null,204);
    }
}
