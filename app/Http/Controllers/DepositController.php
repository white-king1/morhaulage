<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function deposit()
    {
        return view ('user.deposit');
    }

    public function depositDetails()
    {
        return view ('user.depositbtc_details');
    }

    // POSTING BTC PAYMENT TO TRANSACTION DATABASE
      public function postbtcPay(Request $request)
      {

        $trans = new Transaction();
        $trans->user_id = Auth::user()->id;
        $trans->transaction_type_id = 1;
        $trans->amount = $request->amount;
        $trans->is_credit = 1;
        $trans->save();
        return redirect()->route('makebtc.payment', $trans);
      }

      public function makebtcPay(Transaction $trans)
    {
        return view ('user.makebtc_payment', compact('trans'));
    }
}
