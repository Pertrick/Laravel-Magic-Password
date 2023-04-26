<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Jobs\SendMagicPassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\AuthenticateUserFormRequest;
use Illuminate\Http\JsonResponse;

class AuthenticateUser extends Controller
{
    public function __invoke(
            AuthenticateUserFormRequest $request
        ):JsonResponse
    {
       
        SendMagicPassword::dispatch($request->authenticate());

        return response()->json([
            'status' => true,
            'data' => [],
            'message' => 'An email has been sent for you to log in.'
        ]);
    }
}
