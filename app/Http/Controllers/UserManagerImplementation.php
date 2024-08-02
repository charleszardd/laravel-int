<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserManagerInterface;
use App\Models\User;

class UserManagerImplementation implements UserManagerInterface
{
    public function editUser(int $userId, array $userData): bool{

        $user = User::find($userId);

        if($user){
            $user->update($userData);
            return true;

           
        }
        return false;

    }

    public function deleteUser(int $userId): bool{

        $user = User::find($userId);

        if($user){
            $user->delete();
            return true;
        }
        return false;
    }
}
