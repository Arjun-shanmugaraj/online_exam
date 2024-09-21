<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use app\User;

class LoginController extends Controller
{
    public function stuLog(Request $request)
    {
        $request->validate([

            'email'=>'required',
            'password'=>'required'

        ]);

        $email=$request->input('email');

        $password=$request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            
            $user=User::where('email',$email)->first();

            Auth::login($user);

            $request->session()->put('user', $user);

            return redirect('dashboard');
        }
        else{
            return redirect()->back()->withErrors(['Invalid email or password']);
        }
    }

            public function forgotPassword()
    {
        return view('student/forgotPassword');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
