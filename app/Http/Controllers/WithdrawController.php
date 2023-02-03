<?php

namespace App\Http\Controllers;

use App\Withdraw;
use Illuminate\Http\Request;

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
        $withdraw->referral_code = $request->referral_code;
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
}
