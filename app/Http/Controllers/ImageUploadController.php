<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
    public function imageUpload()
    {
        return view('user.image_upload');
    }

    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('upload_images'), $imageName);




        Auth::user()->image=$imageName;

        Auth::user()->save();
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }
}
