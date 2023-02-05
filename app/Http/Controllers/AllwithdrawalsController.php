<?php

namespace App\Http\Controllers;

use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllwithdrawalsController extends Controller
{
    public function allWithdrawals()
    {
        $all_withdrawals = Withdraw::where('user_id',Auth::user()->id)->latest()->take(3)->get();
        return view ('user.all_withdrawals', compact('all_withdrawals'));
    }
}
