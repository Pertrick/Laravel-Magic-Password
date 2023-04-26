<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Actions\CreateNewUser;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisteredUserFormRequest;

class RegisteredUser extends Controller
{
    public function __invoke(
        RegisteredUserFormRequest $request,
        CreateNewUser $createNewUser
        ):JsonResponse
    {
        return response()->json([
            'status' => true,
            'data' => $createNewUser->execute($request->validated()),
            'message' => 'Registration Successful! kindly check your mail for magic password.'
        ]);
    }
}
