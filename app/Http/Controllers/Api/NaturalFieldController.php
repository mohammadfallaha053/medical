<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNaturalFieldRequest;
use App\Http\Resources\NaturalFieldResource;
use App\Models\Natural_field;
use App\Models\NaturalField;
use Illuminate\Http\Request;

class NaturalFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $naturalField=NaturalField::paginate(5);
        return NaturalFieldResource::collection($naturalField);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNaturalFieldRequest $request)
    {
        $naturalField=NaturalField::create($request->all());
        return new NaturalFieldResource($naturalField);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
