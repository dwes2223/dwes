<?php

namespace App\Http\Controllers\Api;

use Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        };
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        $token = JWTAuth::fromUser($user);
        return response()->json(compact('user','token'), 201);
    }

    public function login(Request $request)
    {        
        $credentials = $request->only('email', 'password');
        try {
            if ($token = JWTAuth::attempt($credentials)) {
                return $this->respondWithToken($token); //OK
            } else {
                return response()->json(['error' => 'Credenciales inválidas'], 400);                
            }
        } catch (JWTException $e) {
            \Log::error($e->getMessage());
            return response()->json(['error' => 'No se pudo crear el token'], 500);
        }
    }    

    public function logout()
    {
        // auth()->logout();
        Auth::logout();
    
        return response()->json(['message' => 'Salió con éxito']);
    }

    public function me()
    {
        return response()->json(Auth::user());
    }

    public function refresh()
    {        
        return $this->respondWithToken(JWTAuth::refresh());
    }

    protected function respondWithToken($token, $status=200)
    {        
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ], $status);
    }
}
