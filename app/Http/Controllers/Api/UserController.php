<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::paginate(3);
        return UserResource::collection($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user= User::create($request->all());
        return  new UserResource($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
     return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, User $user)
    {
        $user->update($request->all());
        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response(null,\Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);

    }
}
