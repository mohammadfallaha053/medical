<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnalyseRequest;
use App\Http\Resources\AnalyseResource;
use App\Models\Analyse;
use App\Models\Category;
use Illuminate\Http\Request;

class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $analyse=Analyse::paginate(5);
        return AnalyseResource::collection($analyse);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnalyseRequest $request)
    {
        $analyse=Analyse::create($request->all());
        return new AnalyseResource($analyse);
    }

    /**
     * Display the specified resource.
     */
    public function show(Analyse $analyse)
    {
        return new AnalyseResource($analyse);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAnalyseRequest $request, Analyse $analyse)
    {
        $analyse->update($request->all());
        return new AnalyseResource($analyse);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Analyse $analyse)
    {
        $analyse->delete();
        return response(null,\Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);

    }
}
