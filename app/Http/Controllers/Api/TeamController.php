<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Team::with('users', 'users')->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team): TeamResource
    {
        return new TeamResource($team);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team): void
    {
        $team->delete();
    }
}
