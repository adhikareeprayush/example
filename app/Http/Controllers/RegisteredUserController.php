<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
       return view('auth.register');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => ['required',Password::min(6), 'confirmed'], //password_confirmation
        ]);

        //create user
        $user = User::create($attributes);
        
        //sign the user in
        Auth::login($user);

        //redirect
        return redirect('/jobs');
    }
}
