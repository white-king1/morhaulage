<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileSettings()
    {
        return view ('user.profile_settings');
    }


    public function postProfile(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('upload_images'), $imageName);



        Auth::user()->country = $request->country;
        Auth::user()->Address = $request->address;
        Auth::user()->state = $request->state;
        Auth::user()->city = $request->city;
        Auth::user()->zipcode = $request->zipcode;



        Auth::user()->image=$imageName;

        Auth::user()->save();
        return back()->with('flash_message', 'You successfully updated your profile.')
        ->with('flash_type', 'alert-success');
            
    }
}
