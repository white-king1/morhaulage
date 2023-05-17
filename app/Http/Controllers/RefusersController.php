<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefusersController extends Controller
{
    public function refUsers()
    {

       if (!Auth::user()->referral_link){

        Auth::user()->referral_link = \Str::random(10);
        Auth::user()->save();
       }
       dd(User::where('referral_user_id',Auth::user()->id)->latest()->get());
       $referrals = Auth::user()->referrals;

        // $ref_users = User::latest()->get();
        return view ('user.referred_users', compact('referrals'));
    }
}

