<?php

namespace App\Actions;

use App\Models\User;
use App\Jobs\SendMagicPassword;

class CreateNewUser
{
    public function execute(array $data) : User
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email']
        ]);

        SendMagicPassword::dispatch($user);

        return $user;
    }
}
