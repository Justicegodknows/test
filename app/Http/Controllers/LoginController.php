<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function create()
   {
       return view('auth.login');
   }
   public function login()
   {
       dd('login'); // Validate and log in the user
   }

   public function store()
   {
     return redirect('/dashboard'); // Validate and log in the user
   }        
   public function logout()
   {
       dd('logout'); // Log out the user
   }
}