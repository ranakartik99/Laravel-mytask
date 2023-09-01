<?php
namespace App\Http\Controllers;

use App\Models\Student; // Make sure the namespace is correct
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function LoginPage()
    {
        return view('login/login');
    }

    public function LoginFetch(Request $request)
    {
       
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // dd($credentials);
            return redirect('/loginsuccess')->with('success', 'You have successfully logged in!');
        }
        // dd($credentials);
        return back()->with('error', 'Invalid credentials!!');
    }
    public function LoginDisplay()
    {
        return view('login/success');
    }
}
