<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
      // Validate and create the user
      $attributes = request()->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8|confirmed',
      ]);
        // User::create([...]);
        $user = User::create($attributes);
         // Log the user in
        Auth::login($user);

       return redirect('/jobs'); 
    }
   
}