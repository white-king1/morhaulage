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
        return redirect()->back()->with('success','Password successfully Updated.');
      }else{
        return redirect()->back()->with('error','current password does not match.');
      }

    }
}
