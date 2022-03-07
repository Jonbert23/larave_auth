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
            'name' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:5'],
            'confirm_password' => ['required']
        ]);
        
        $password = $request->password;
        $email = $request->email;
        $confirm_password = $request->confirm_password;

        if($password == $confirm_password)
        {
           User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

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

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials))
        {
            Toastr::success('You have loged in', 'Success');
            return redirect('/dashboard');
        }
        else
        {
            Toastr::error('Your credentials does not exist', 'Error');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();

        Toastr::success('You are logout', 'Success');
        return redirect('/login');
    }
}
