<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsControler extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //dd(request()->all());
        if (! auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
