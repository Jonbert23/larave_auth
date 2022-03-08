<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;

class ProfileController extends Controller
{
    public function my_profile($id)
    {
        $user = User::find($id);
        return view('user.user_profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request)
    {
        $validateDate = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'b_date' => ['required'],
            'phone' => ['required', 'min:10'],
            'address' => ['required'],
            'email' => ['required'],
            'profile_photo' => ['mimes:jpeg,jpg,png'],
        ]);

        $user = User::find($request->id);
        $store_image = $user->photo;

        if($request->hasfile('profile_photo'))
        {
            $profile_photo = $request->file('profile_photo');
            $hex_generate = hexdec(uniqid());
            $image_ext = strtolower($profile_photo->getClientOriginalExtension());
            $image_name = $hex_generate.'.'.$image_ext;
            $upload_location = 'image/user/';
            $profile_photo->move($upload_location,$image_name);
            $store_image = $upload_location.$image_name;
        }
        
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->b_date = $request->b_date;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->photo = $store_image;
        $user->save();

        Toastr::success('Profile have been successfully updated','Success');
        return redirect()->back();
    }

    public function change_password(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required', 'min:5'],
            'confirm_password' => ['required']
        ]);

        $user = User::find($request->id);
        $user_password = $user->password;

        if(Hash::check($request->old_password, $user_password))
        {
            if($request->new_password == $request->confirm_password)
            {
                $user->password = Hash::make($request->new_password);
                $user->save();

                Toastr::success('Password successfully updated', 'Success');
                return redirect()->back();
            }
            else
            {
                Toastr::error('Invalid credentials', 'Error');
                return redirect()->back();
            }
        }
        else
        {
            Toastr::error('Invalid credentials', 'Error');
            return redirect()->back();
        }
    }
}
