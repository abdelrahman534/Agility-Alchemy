<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function signIn(){
        return view('sign-in');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4',
            ]);

            $user = User::where('email',$request->email)->first();
            
            if($user && Hash::check($request->password,$user->password)){
                Auth::login($user);

                return redirect()->route('index');
                    
        }
        // If login fails, redirect back with error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function home(){
        return view('home');
    }

}