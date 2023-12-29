<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInsuranceCompaniesRequest;
use App\Http\Resources\InsuranceCompaniesResource;
use App\Models\InsuranceCompanies;

class InsuranceCompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return InsuranceCompaniesResource::collection(InsuranceCompanies::with(['phones','patients'])->paginate(5));
     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInsuranceCompaniesRequest $request)
    {
        $insuranceCompany=InsuranceCompanies::create($request->all());
        return new InsuranceCompaniesResource($insuranceCompany);
    }

    /**
     * Display the specified resource.
     */
    public function show(InsuranceCompanies $insuranceCompany)
    {
        return new InsuranceCompaniesResource($insuranceCompany);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreInsuranceCompaniesRequest $request, InsuranceCompanies $insuranceCompany)
    {
        $insuranceCompany->update($request->all());
        return new InsuranceCompaniesResource($insuranceCompany);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsuranceCompanies $insuranceCompany)
    {
         $insuranceCompany->delete();
        return response(null,204);
    }
}
