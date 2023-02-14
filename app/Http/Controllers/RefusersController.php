<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RefusersController extends Controller
{
    public function refUsers()
    {
        $ref_users = User::latest()->get();
        return view ('user.referred_users', compact('ref_users'));
    }
}
