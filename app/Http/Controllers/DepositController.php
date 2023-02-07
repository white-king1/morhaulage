<?php

namespace App\Http\Controllers;

use App\Wallet;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function deposit()
    {
        return view('user.deposit');
    }
    
    // DEPOSIT BTC PUBLIC FUNCTION
    public function depositDetails()
    {
        return view('user.depositbtc_details');
    }

    // POSTING BTC PAYMENT TO TRANSACTION DATABASE
    public function postbtcPay(Request $request)
    {
        $transaction = $request->transaction_id;

        $transaction_id = \Str::random(14);


        $trans = new Transaction();
        $trans->transaction_id = $transaction_id;
        $trans->user_id = Auth::user()->id;
        $trans->transaction_type_id = 1;
        $trans->amount = $request->amount;

        $trans->is_credit = 1;
        $trans->save();
        return redirect()->route('makebtc.payment', $trans);
    }

    public function makebtcPay(Transaction $trans)
    {
        return view('user.makebtc_payment', compact('trans'));
    }


    // DEPOSIT ETH PUBLIC FUNCTION
    public function depositEth()
    {
        return view('user.depositeth_details');
    }

    // POSTING ETH PAYMENT TO TRANSACTION DATABASE
    public function postethPay(Request $request)
    {
        $transaction = $request->transaction_id;

        $transaction_id = \Str::random(14);


        $trans = new Transaction();
        $trans->transaction_id = $transaction_id;
        $trans->user_id = Auth::user()->id;
        $trans->transaction_type_id = 1;
        $trans->amount = $request->amount;

        $trans->is_credit = 1;
        $trans->save();
        return redirect()->route('makeeth.payment', $trans);
    }

    public function makeethPay(Transaction $trans)
    {
        return view('user.makeeth_payment', compact('trans'));
    }



// DEPOSIT USDT PUBLIC FUNCTION
public function depositUsdt()
{
    return view('user.depositusdt_details');
}

// POSTING USDT PAYMENT TO TRANSACTION DATABASE
public function postusdtPay(Request $request)
{
    $transaction = $request->transaction_id;

    $transaction_id = \Str::random(14);


    $trans = new Transaction();
    $trans->transaction_id = $transaction_id;
    $trans->user_id = Auth::user()->id;
    $trans->transaction_type_id = 1;
    $trans->amount = $request->amount;

    $trans->is_credit = 1;
    $trans->save();
    return redirect()->route('makeusdt.payment', $trans);
}

public function makeusdtPay(Transaction $trans)
{
    return view('user.makeusdt_payment', compact('trans'));
}



    // SUCCESSFUL PAYMENT FUNCTION
    public function congratsPay(Transaction $trans)
    {



        // $transDetails = $trans;

        // $trans = new Transaction();

        // $trans->user_id = Auth::user()->id;

        // $trans->transaction_type_id = 1;

        // $trans->amount = $transDetails;
        // $trans->is_credit = 1;


        // PENDING SHOULD BE CHANGED TO PAID
        if ($trans->status == 'pending') {

            $w = Wallet::where('user_id', $trans->user_id)->increment('balance', $trans->amount);

        //    $w= Auth::user()->wallet->balance += $trans->amount;



            // $w->save();

            return view('user.congrats_payment');
        }else {
            return view('user.chart_us');
        }
    }

    // public function chartUs()
    // {
    //     return view('user.chart_us');
    // }
}
