<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;
use Config\auth;

class LoginController extends Controller
{
    
    public function LoginPage() {
        return view('login/login');
       }

       public function LoginFetch(Request $request) {
        // $dd1 = student::get();
        $creds =[
            'email'=> $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($creds)) {
            return redirect('/')->with('success','Login Success');
        }
       }
}
