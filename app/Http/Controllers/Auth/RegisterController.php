<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function stuReg(Request $req)
{

        $validator = Validator::make($req->all(), [
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'fname'=>'required',
            'lname'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'board'=>'required',
            'education'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'city'=>'required',
            'state'=>'required',    
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            'password_confirmation' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',


        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

         $existingEmail = User::where('email', $req->input('email'))->first();
        if ($existingEmail) {
            return redirect()->back()->withErrors(['email' => 'Email is already registered.'])->withInput();
        }

            $User = new User;

            $imagename=time().".".$req->img->extension();
        
            $req->img->move(public_path('images'),$imagename);

            $User->img = $imagename;

            $User->fname=$req->input('fname');

            $User->lname=$req->input('lname');

            $User->mobile=$req->input('mobile');

            $User->email=$req->input('email');

            $User->board=$req->input('board');

            $User->education=$req->input('education');

            $User->gender=$req->input('gender');

            $User->dob=$req->input('dob');

            $User->city=$req->input('city');

            $User->state=$req->input('state');

            $User->password=Hash::make($req->input('password'));
            
            $User ->save();          //Insert query

            echo "Success";

            $req->session()->put('user', $User);

            Auth::login($User);

            return redirect('dashboard');

}


}
 