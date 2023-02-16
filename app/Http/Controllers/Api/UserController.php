<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(User::latest()->get());
    }


    /**
     * 
     */
    public function getByType(string $type, Request $request)
    {
        return UserResource::collection(User::where('user_type', $type)->where('parish_official', intval($request->officialParish))->get());  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * 
     */
    public function confirmed(User $user)
    {
        $user->confirmed = true;
        $user->save();
        return new UserResource($user);
    }

    /**
     * 
     */
    public function toogleBlocked(User $user)
    {
        $user->blocked = !$user->blocked;
        $user->save();
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): Response
    {
        //
    }

    public function destroy(string $users, Request $request)
    {
        $users = json_decode($users);
        foreach ($users as  $user) {
            $user = User::find($user);
            if (File::exists(public_path(str_replace($request->getSchemeAndHttpHost() . '/', "", $user->avatar)))) {
                File::delete(public_path(str_replace($request->getSchemeAndHttpHost() . '/', "", $user->avatar)));
            }
            $user->delete();
        }

        return response()->noContent();
    }
}
