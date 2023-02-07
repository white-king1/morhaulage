<?php

namespace App\Http\Controllers;

use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllwithdrawalsController extends Controller
{
    public function allWithdrawals()
    {
        $user = User::all();
        $all_withdrawals = Withdraw::with('user')->latest()->get();
        return view ('user.all_withdrawals', compact('all_withdrawals'));
    }

    public function paidWithdrawals($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'paid';
        $withdraw->save();
        return redirect()->route('all.withdrawals');
    }
}
