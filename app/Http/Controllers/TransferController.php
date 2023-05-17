<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\User;
use App\Wallet;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function newTransafer()
    {
        return view('user.transfer');
    }

    public function investmentTrans()
    {
        return view('user.invest_trans');
    }

    public function totalinvestTrans()
    {
        return view('user.total_invest');
    }

    public function transferDetails(Request $request)
    {
        $trf = new Transfer();
        $trf->referral_link = $request->referral_link;
        $trf->transfer_amount = $request->transfer_amount;

        $trf->save();

        if ($trf->save()) {
            $all_tfs= Wallet::where('referral_link',$request->referral_link)->first();
            $all_tfs->balance += $trf->transfer_amount;
            $all_tfs->save();
            return redirect()->back()->with('flash_message', 'Your Transfer Was Successfull.')->with('flash_type', 'alert-success');
        }

       return view ('user.transfer',compact('all_tfs'));
        // $u = Wallet::where('referral_code', $request->referral_link)->first();

        // $p= $u->increment('balance',$request->transfer_amount);

        // return view('user.transfer_successful',['trf'=>$trf]);


    }

    public function transferInvestment(Request $request)
    {
        $trf = new Transfer();
        $trf->referral_link = $request->referral_link;
        $trf->transfer_amount = $request->transfer_amount;

        $trf->save();

        if ($trf->save()) {
            $all_tfs= Wallet::where('referral_link',$request->referral_link)->first();
            $all_tfs->invest_balance += $trf->transfer_amount;
            $all_tfs->save();
            return redirect()->back()->with('flash_message', 'Your Transfer Was Successfull.')->with('flash_type', 'alert-success');
        }

       return view ('user.transfer',compact('all_tfs'));
        // $u = Wallet::where('referral_code', $request->referral_link)->first();

        // $p= $u->increment('balance',$request->transfer_amount);

        // return view('user.transfer_successful',['trf'=>$trf]);


    }

    public function totalinvesttransDetails(Request $request)
    {
        $trf = new Transfer();
        $trf->referral_link = $request->referral_link;
        $trf->transfer_amount = $request->transfer_amount;

        $trf->save();

        if ($trf->save()) {
            $all_tfs= Wallet::where('referral_link',$request->referral_link)->first();
            $all_tfs->totalinvest_balance += $trf->transfer_amount;
            $all_tfs->save();
            return redirect()->back()->with('flash_message', 'Your Transfer Was Successfull.')->with('flash_type', 'alert-success');
        }

       return view ('user.transfer',compact('all_tfs'));
        // $u = Wallet::where('referral_code', $request->referral_link)->first();

        // $p= $u->increment('balance',$request->transfer_amount);

        // return view('user.transfer_successful',['trf'=>$trf]);


    }

    public function makebtcPay(Transaction $trans)
    {
        return view('user.transfer_successful', compact('trf'));
    }
}
