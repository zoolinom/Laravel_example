<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
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

        \Mail::to($user)->queue(new Welcome($user));
        //$when = now()->addMinutes(1);
        //\Mail::to($user)->later($when, new Welcome($user));

        return redirect()->home();
    }
}
