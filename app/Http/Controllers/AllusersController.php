<?php

namespace App\Http\Controllers;

use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllusersController extends Controller
{
    public function allUsers()
    {

        $all_users = User::where('id',Auth::user()->id)->latest()->take(3)->get();
        return view ('user.all_users', compact('all_users'));
    }
}
