<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\User;
use App\answer;
use App\questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
class AdminController extends Controller
{
    // app/Http/Controllers/AdminController.php

public function index(Request $request)
{ 
    // Get the user data from the session
    $admin = $request->session()->get('admin');
    // Check if session data is present
    if ($admin) {
    $visitorsCount=User::count();
    $usersCount = answer::distinct()->count('email');
    $lastAddedExam = questions::latest()->first();
        // Return the view with the admin data
        return view('admin/index', compact('lastAddedExam','admin','visitorsCount','usersCount'));
    } else {
        // Redirect to login page if session data is not present
        return redirect()->route('adminlogin');
    }
}

public function adminlogin()
{
    return view('admin/login');
}
public function login(Request $request)
{
$request->validate([
    'username' => 'required|min:3|max:255',
    'password' => 'required|min:8',
]);

$credentials = $request->only(['username', 'password']);

if (Auth::guard('admin')->attempt($credentials)) {
    $admin = Admin::where('username', $request->input('username'))->first();
    if (!$admin) {
        // Handle the case where the admin does not exist
        return redirect()->back()->withErrors([
            'username' => 'Admin does not exist',
        ]);
    }
    $request->session()->put('admin', $admin);
    return redirect()->route('index');
} else {
    return redirect()->back()->withErrors([
        'username' => 'Invalid username or password',
        'password' => 'Invalid username or password',
    ]);
}
    }

    public function adminlogout(Request $request)
    {
       Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('adminlogin');
    }

    public function adminregister()
    {
        return view('admin/registration');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:admins',
            'email' => 'required|unique:admins',
            'password' => 'required|confirmed',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            'password_confirmation' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
        ]);
        $existingEmail = Admin::where('email', $request->input('email'))->first();
        if ($existingEmail) {
            return redirect()->back()->withErrors(['email' => 'Email is already registered.'])->withInput();
        }

        $admin = new Admin();
        $imagename=time().".".$request->img->extension();
        $request->img->move(public_path('images'),$imagename);
        $admin->img = $imagename;
        $admin->firstname = $request->input('firstname');
        $admin->lastname = $request->input('lastname');
        $admin->username = $request->input('username');
        $admin->email = $request->input('email');
        $admin->password = bcrypt($request->input('password'));
        $admin->save();
                // Store the user data in the session
        $request->session()->put('admin', $admin);
        return redirect('index');
    }
}
