<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlldepositsController extends Controller
{
    public function allDeposits()
    {
       $user = User::all();
        $all_deposits = Transaction::with('user')->latest()->get();
        return view ('user.all_deposits',compact('all_deposits'));
    }

    public function paidDeposits($id)
    {
          $trans = Transaction::find($id);
          $trans->status = 'paid';
          $trans->save();
          return redirect()->route('all.deposits');
    }
}

