<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:4|max:255|unique:users',
            'password' => 'required|string|min:4',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required|string|in:Male,Female',
            'terms' => 'accepted',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'gender' => $request->gender,
        ]);

        return redirect()->route('index')->with('status', 'Registration successful! Please login.');
        // remove index and add the homepage link
    }

    public function index(){
        return view('index');
    }


}
