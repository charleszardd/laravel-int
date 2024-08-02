<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface UserManagerInterface
{
    public function editUser(int $userId, array $userData){

    }
    public function deleteUser(int $userId){


    }
}
