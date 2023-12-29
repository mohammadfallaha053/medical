<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestRequest;
use App\Http\Resources\TestResource;
use App\Models\Test;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TestResource::collection(Test::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {
        return new TestResource(Test::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        return new TestResource($test);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTestRequest $request, Test $test)
    {
        $test->update($request->all());
        return new TestResource($test);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return response(null,204);
    }
}
