<?php

namespace App\Http\Controllers;

use App\Wallet;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        return view('user.withdraw');
    }


    // WITHDRAW BTC PUBLIC FUNCTION
    public function withdrawbtcDetails()
    {
        return view ('user.withdrawbtc_details');
    }

    // POSTING BTC WITHDRAWAL TO TRANSACTION DATABASE
    public function postbtcWithdraw(Request $request)
    {
        $withdraw = new Withdraw;
        $withdraw->referral_link = $request->referral_link;
        $withdraw->user_id = Auth::user()->id;
        $withdraw->crypto_currency = $request->crypto_currency;
        $withdraw->wallet_address = $request->wallet_address;
        $withdraw->withdraw_amount = $request->withdraw_amount;

        $withdraw->save();
        return redirect()->route('makebtc.withdraw', $withdraw);
    }

    public function makebtcWithdraw(withdraw $withdraw)
    {
        return view ('user.makebtc_withdraw', compact ('withdraw'));
    }



// WITHDRAW ETH PUBLIC FUNCTION
public function withdrawEth()
{
    return view ('user.withdraweth_details');
}

// POSTING ETH WITHDRAWAL TO TRANSACTION DATABASE
public function postethWithdraw(Request $request)
{
    $withdraw = new Withdraw;
    $withdraw->referral_link = $request->referral_link;
    $withdraw->user_id = Auth::user()->id;
    $withdraw->crypto_currency = $request->crypto_currency;
    $withdraw->wallet_address = $request->wallet_address;
    $withdraw->withdraw_amount = $request->withdraw_amount;

    $withdraw->save();
    return redirect()->route('makeeth.withdraw', $withdraw);
}

public function makeethWithdraw(Withdraw $withdraw)
{
    return view ('user.makeeth_withdraw', compact ('withdraw'));
}


// WITHDRAW USDT PUBLIC FUNCTION
public function withdrawUsdt()
{
    return view ('user.withdrawusdt_details');
}

// POSTING USDT WITHDRAWAL TO TRANSACTION DATABASE
public function postusdtWithdraw(Request $request)
{
    $withdraw = new Withdraw;
    $withdraw->referral_link = $request->referral_link;
    $withdraw->user_id = Auth::user()->id;
    $withdraw->crypto_currency = $request->crypto_currency;
    $withdraw->wallet_address = $request->wallet_address;
    $withdraw->withdraw_amount = $request->withdraw_amount;

    $withdraw->save();
    return redirect()->route('makeusdt.withdraw', $withdraw);
}

public function makeusdtWithdraw(Withdraw $withdraw)
{
    return view ('user.makeusdt_withdraw', compact ('withdraw'));
}



    // SUCCESSFUL WITHDRAWAL FUNCTION
    public function congratsWithdraw(Withdraw $withdraw)
    {

        // PENDING SHOULD BE CHANGED TO PAID
       
        if ($withdraw->status == 'pending') {


            if(Auth::user()->wallet->balance <= $withdraw->withdraw_amount){
                return redirect()->route('insufficient.funds', $withdraw);
            }else {
                $d = Wallet::where('user_id', $withdraw->user_id)->decrement('balance', $withdraw->withdraw_amount);

            return view('user.congrats_withdraw',$withdraw);

            }
            // $d = Wallet::where('user_id', $withdraw->user_id)->decrement('balance', $withdraw->withdraw_amount);

            // return view('user.congrats_withdraw');
        }
    }

    public function insufficientFunds()
    {
        return view ('user.insufficient_funds');
    }
}
