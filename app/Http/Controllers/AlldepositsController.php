<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlldepositsController extends Controller
{
    public function allDeposits()
    {

        $all_deposits = Transaction::where('user_id',Auth::user()->id)->latest()->take(3)->get();
        return view ('user.all_deposits',compact('all_deposits'));
    }
}
