<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationControler extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //dd(request()->all());
        $this->validate(request(), [
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->home();
    }
}
