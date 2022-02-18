<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'min:8|required|confirmed',
        ]);

        $attributes['password'] = bcrypt(request('password'));
        User::create($attributes);

        Auth::attempt(request()->only('email', 'password'));
        
        return redirect('/');
    }
}
