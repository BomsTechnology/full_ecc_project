<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use App\Models\UserDioceseDetail;
use App\Models\UserFaithfulDetail;
use App\Models\UserParishDetail;
use App\Models\UserPrayergroupDetail;
use App\Models\UserSeatDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    public function login(LoginRequest $request): Response
    {
        $fields = $request->validated();

        //check email
        $user = User::where('email', $fields['email'])->first();

        //check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(['status' => false, 'message' => 'Email ou mot de passe incorrect'], 401);
        }

        //check activted account
        if ($user->confirmed != true) {
            return response(['status' => false, 'message' => 'Votre compte n\'a pas été confirmé'], 401);
        }

        //check blocked account
        if ($user->blocked != false) {
            return response(['status' => false, 'message' => 'Votre compte a été bloqué'], 401);
        }

        //create token
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'status' => true,
            'message' => 'Login successful!',
            'data' => [
                'user' =>  new UserResource($user) ,
                'token' => $token
            ]
        ];
        return response($response, 201);
    }

    public function loginAdmin(LoginRequest $request): Response
    {
        $fields = $request->validated();

        //check email
        $admin = User::where([['email', '=', $fields['email']], ['user_type', '=', 'admin']])->first();

        //check password
        if (!$admin || !Hash::check($fields['password'], $admin->password)) {
            return response(['status' => false, 'message' => 'Email ou mot de passe incorrect'], 401);
        }

        //check activted account
        if ($admin->confirmed != true) {
            return response(['status' => false, 'message' => 'Votre compte n\'a pas été confirmé'], 401);
        }

        //check blocked account
        if ($admin->blocked != false) {
            return response(['status' => false, 'message' => 'Votre compte a été bloqué'], 401);
        }

        //create token
        $token = $admin->createToken('myapptoken')->plainTextToken;

        $response = [
            'status' => true,
            'message' => 'Login successful!',
            'data' => [
                'user' => new UserResource(
                    $admin
                ),
                'token' => $token
            ]
        ];
        return response($response, 201);
    }

    public function register(RegisterRequest $request): Response
    {
        $fields = $request->validated();

        $user = User::create([
            'username' => $fields['username'],
            'lastname' => $fields['lastname'],
            'parish_official' => $fields['parish_official'],
            'email' => $fields['email'],
            'user_type' => $fields['user_type'],
            'password' => Hash::make($fields['password']),
        ]);

        UserFaithfulDetail::create([
            'user_id' => $user->id
        ]);

        UserDioceseDetail::create([
            'user_id' => $user->id
        ]);

        UserParishDetail::create([
            'user_id' => $user->id
        ]);

        UserPrayergroupDetail::create([
            'user_id' => $user->id
        ]);

        UserSeatDetail::create([
            'user_id' => $user->id
        ]);

        event(new Registered($user));

        $response = [
            'status' => true,
            'message' => 'Register successful!',
            'data' => [
                'user' => new UserResource($user),
            ]
        ];
        return response($response, 201);
    }

    public function logout(Request $request): Response
    {
        $request->user()->currentAccessToken()->delete();

        $response = [
            'status' => true,
            'message' => 'Logout successfully',
        ];

        return response($response, 201);
    }
}
