<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Wallet;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $wallet = Wallet::where('user_id', Auth::user()->id)->exists();

        if ( $wallet == false) {
           $wallet = new Wallet();
           $wallet->user_id = Auth::user()->id;
           $wallet->referral_code = Auth::user()->referral_link;

           $wallet->save();
            return redirect()->route ('user.dashboard')->with('flash_message', 'You successfully logged in to your dashboard.')
            ->with('flash_type', 'alert-success');

        }
        return view('user.dashboard');
    }
}
