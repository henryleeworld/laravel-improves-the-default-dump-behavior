<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function dump() 
    {
        User::query()->select('email')->where('id', 1)->dd();
    }
}
