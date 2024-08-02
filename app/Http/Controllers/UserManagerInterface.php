<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface UserManagerInterface 
{
    public function editUser(int $userId, array $userData): bool{
        //logic here-> find user then edit if true
            return true;
    }
    public function deleteUser(int $userId): bool{
        //logic here-> find user then delete if true
            return true;
    }
}
