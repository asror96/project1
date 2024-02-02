<?php

namespace App\Http\Controllers;

use App\Events\UserCreatedEvent;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function create(StoreUserRequest $request)
    {
        $data=$request->validated();
        $user=User::create($data);
        UserCreatedEvent::dispatch($user);
        return response()->json(new UserResource($user),201);
    }

    public function login(LoginUserRequest $request)
    {
        $data=$request->validated();

       if (! $token = auth()->attempt($data)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
