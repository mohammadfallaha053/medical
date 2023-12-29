<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group=Group::paginate(5);
        return GroupResource::collection($group);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        $group=Group::create($request->all());
        return new GroupResource($group);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return new GroupResource($group);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGroupRequest $request, Group $group)
    {
        $group->update($request->all());
        return new GroupResource($group);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return response(null,\Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);

    }
}
