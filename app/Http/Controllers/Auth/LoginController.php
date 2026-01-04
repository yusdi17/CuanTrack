<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->validated();

        $loginInput = $request->input('identity');

        $fieldType = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where($fieldType, $loginInput)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid credentials (username/email or password wrong).'
            ], 401);
        }

        // if ((int) $user->is_active !== 1) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Account is not activated. Please check your email.'
        //     ], 403);
        // }

        $token = $user->createToken($user->name)->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Login successful',
            'data' => new UserResource($user),
            'token' => $token
        ], 200);
    }
    
}
