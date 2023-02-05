<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangepController extends Controller
{
    public function changePassword()
    {
        return view ('user.change_password');
    }
}
