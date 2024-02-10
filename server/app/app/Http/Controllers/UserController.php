<?php

namespace app\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use Orion\Http\Resources\Resource;


class UserController extends Controller
{
    protected $model=User::class;
    protected $request=StoreUserRequest::class;
    protected $resource=Resource::class;
    protected $policy=UserPolicy::class;

    public function crete_Admin(): \Illuminate\Http\JsonResponse
    {
        User::create([
            'name' => 'admin',
            'lastname' => 'lastname',
            'email'=>'admin@example.com',
            'password' => 'password',
            'photo' => 'photo',
        ]);
        return response()->json([
            'Message'=>'Admin is created!',
            'Email'=>'admin@example.com',
            'Password'=>'password'
        ],201);
    }
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $data=$request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
            'photo' => ['required', 'string'],
        ]);

         $user = User::create([
            'name'=>$data['name'],
            'lastname'=>$data['lastname'],
            'email'=>$data['email'],
            'password'=>$data['password'],
            'photo'=>$data['photo']
        ]);
        return response()->json([
            "User"=>$user
        ],201);
    }
    public function login(LoginUserRequest $request): \Illuminate\Http\JsonResponse
    {
        $data=$request->validated();

       if (! $token = auth()->attempt($data)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }
    protected function respondWithToken($token): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
