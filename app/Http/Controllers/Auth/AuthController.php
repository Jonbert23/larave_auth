<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store_user(Request $request)
    {
        $validateDate = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'b_date' => ['required'],
            'phone' => ['required', 'min:11'],
            'address' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:5'],
            'confirm_password' => ['required']
        ]);
        
        $password = $request->password;
        $confirm_password = $request->confirm_password;
        $male_photo = "image/user/male.jpg";
        $female_photo = "image/user/female.png";

        if($password == $confirm_password)
        {
            $user = New User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->gender = $request->gender;
            $user->b_date = $request->b_date;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if($request->gender == "Male"){
                $user->photo = $male_photo;
            }
            else{
                $user->photo = $female_photo;
            }
            $user->save();

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) 
            {
                Toastr::success('You have been registered', 'Success');
                return redirect('/dashboard');
            }
        }
        else
        {
            Toastr::error('The password does not match', 'Error');
            return redirect()->back();
        }
    }

    public function authenticate(Request $request)
    {
        $validateDate = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        //$credentials = $request->only('email','password');
        $password = $request->password;
        $email = $request->email;

        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            Toastr::success('You have loged in', 'Success');
            return redirect('/dashboard');
            //echo $request->password;
        }
        else
        {
            Toastr::error('Your credentials does not exist', 'Error');
            return redirect()->back();
            //echo $request->password;
        }
    }

    public function logout()
    {
        Auth::logout();

        Toastr::success('You are logout', 'Success');
        return redirect('/login');
    }
}
