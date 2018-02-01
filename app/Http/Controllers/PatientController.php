<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('patients.index', compact('patients'));
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store()
    {
        //dd(request()->all());

        $this->validate(request(), [
            'pat_name' => 'required',
            'pat_surname' => 'required',
            'jmbg' => 'required|size:13'
        ]);

        $patient = new Patient(request(['pat_name', 'pat_surname', 'jmbg']));

        $patient->timestamps = false;

        $patient->save();

        return redirect('/patients');
    }
}
