<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class ChangepController extends Controller
{
    public function changePassword()
    {
        return view ('user.change_password');
    }

    public function updatePassword(Request $request)
    {
     $request->validate([
      'current_password'=>'required|min:6|max:100',
      'new_password'=>'required|min:6|max:100',
      'confirm_password'=>'required|same:new_password'
     ]);

     $current_user=auth()->user();
      if(Hash::check($request->current_password,$current_user->password)){

        $current_user->update([
            'password'=>bcrypt($request->new_password)
        ]);
        return redirect()->back()->with('flash_message', 'You have successfully changed your password.')
        ->with('flash_type', 'alert-success');
      }else{
        return redirect()->back()->with('flash_message', 'You have successfully changed your password.')
        ->with('flash_type', 'alert-success');
      }

    }
}
