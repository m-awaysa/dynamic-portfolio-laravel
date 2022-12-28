<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index ()
    {
        
        return view('auth.login');
    }
    public function authenticate (Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email','max:255'],
            'password' => ['required', 'min:8','max:255']
         ]);
   
            if (!  auth()->attempt($user)) {
               return redirect()->route('login')->with('status', 'Invalid email or password');
            }
           
        return redirect()->route('portfolio');
    }
}
