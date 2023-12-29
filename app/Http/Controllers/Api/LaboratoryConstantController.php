<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLaboratoryConstantRequest;
use App\Http\Resources\LaboratoryConstantResource;
use App\Models\LaboratoryConstant;
class LaboratoryConstantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labC=LaboratoryConstant::with('phones')->paginate(request()->perPage);
        return LaboratoryConstantResource::collection($labC);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLaboratoryConstantRequest $request )
    {
        $data=$request->all();
        if($request->hasFile('logo_image')){
            $file=$request->file('logo_image');
            $name='lab/'.uniqid().'.'.$file->extension();
            $file->storePubliclyAs('public',$name);
            $data['logo_image']=$name;
        }


        $laboratoryConstant =LaboratoryConstant::create($data);
        return LaboratoryConstantResource::make($laboratoryConstant);
    }

    /**
     * Display the specified resource.
     */
    public function show(LaboratoryConstant $laboratoryConstant)
    {
        $laboratoryConstant->load(['phones']);
        return  new LaboratoryConstantResource($laboratoryConstant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreLaboratoryConstantRequest $request, LaboratoryConstant $laboratoryConstant)
    {
        $laboratoryConstant->update($request->all());
                return new LaboratoryConstantResource($laboratoryConstant);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaboratoryConstant $laboratoryConstant)
    {
        $laboratoryConstant->delete();
        return response(null,\Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);
    }
}
