<?php

namespace App\Http\Controllers\Api;

use App\Events\UserCreated;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return User::with('team', 'team')->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
    {
        $user = User::create($request->all());

        event(new UserCreated($user));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): void
    {
        $user->delete();
    }
}
