<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view ('user.dashboard');
    }


    public function regRef(Request $request)
    {
        $user = $request->referral_link;
        $referral_link = \Str::random(10);

        $user = new User;
        $user->referral_link = $referral_link;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;

        // $user->user_id = Auth::user()->id;
        $user->save();
        return redirect()->route('user.view', $user);
    }


    public function userView(User $user)
    {
        return redirect()->route('home', compact('user'));
    }
}
