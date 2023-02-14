<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefcomController extends Controller
{
    public function refCom()
    {
        return view('user.referral_commision');
    }
}
