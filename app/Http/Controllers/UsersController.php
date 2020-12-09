<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Jenssegers\Date;

class UsersController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('pages.profile', compact('user'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/[0-9]{10}/',
        ]);

        $user = auth()->user();
        $user->edit($request);
        return back();
    }


    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,gif,png|max:10024',
        ]);

        $user = auth()->user();
        $imageName = $user->uploadImage($request->image);
        if($user->save()) {
          return [
              'success' => true,
              'numb' => $request->number,
              'imageName' => $imageName,

              ];
          }
    }





}
