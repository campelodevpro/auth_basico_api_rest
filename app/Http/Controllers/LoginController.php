<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::where('email', $request->get('email'))->first();

        return [
            'access_token' => $user->createToken($user->name.$user->created_at)->plainTextToken
        ];
        
    }
}
