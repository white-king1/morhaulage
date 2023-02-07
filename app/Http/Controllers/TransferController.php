<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\Wallet;
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


        $u = Wallet::where('referral_code', $request->referral_link)->first();

        $p= $u->increment('balance',$request->transfer_amount);

        return view('user.transfer_successful',['trf'=>$trf]);


    }

    public function makebtcPay(Transaction $trans)
    {
        return view('user.transfer_successful', compact('trf'));
    }
}
