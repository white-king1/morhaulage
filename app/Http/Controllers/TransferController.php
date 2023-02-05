<?php

namespace App\Http\Controllers;

use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function newTransafer()
    {
        return view('user.transfer');
    }

    public function transferDetails(Request $request)
    {
        $trf = new Transfer();
        $trf->referral_link = $request->referral_link;
        $trf->transfer_amount = $request->transfer_amount;

        $trf->save();


        if ($trf->save()) {
            Auth::user()->wallet->balance += $trf->transfer_amount;
            Auth::user()->wallet->save();

            return view('user.transfer_successful', $trf);
        }
        return view('user.transfer');
    }

    public function makebtcPay(Transaction $trans)
    {
        return view('user.transfer_successful', compact('trf'));
    }
}
