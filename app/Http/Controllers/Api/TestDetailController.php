<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestDetailRequest;
use App\Http\Resources\TestDetailResource;
use App\Models\TestDetail;

class TestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TestDetailResource::collection(TestDetail::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestDetailRequest $request)
    {
        return new TestDetailResource(TestDetail::create($request->all()));

    }

    /**
     * Display the specified resource.
     */
    public function show(TestDetail $testDetail)
    {
        return new TestDetailResource($testDetail);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTestDetailRequest $request, TestDetail $testDetail)
    {
        $testDetail->update($request->all());
        return new TestDetailResource($testDetail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestDetail $testDetail)
    {
        $testDetail->delete();
        return response(null,204);
    }
}
