<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:10|max:30|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        // $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success','Registration Success! Please Login');

        return redirect('/login')->with('success','Registration Success! Please Login');
    }
}
