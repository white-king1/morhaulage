<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReinvestController extends Controller
{
    public function reinvestBalance()
    {
        return view ('user.reinvest_balance');
    }
}
