<?php
namespace App\Http\Requests\Api\Auth\Traits;

use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

trait ValidateRequest{

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
            'message' => 'Validation errors',
            'data' => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY)
        );

    }

}