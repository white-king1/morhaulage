<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepvreportController extends Controller
{
    public function depvReport()
    {

        $depv = Transaction::where('user_id', Auth::user()->id)->latest()->take(3)->get();
        
        return view('viewreport.depv_report', compact('depv'));
    }



    public function investpReport()
    {
        return view ('viewreport.investp_report');
    }
}
