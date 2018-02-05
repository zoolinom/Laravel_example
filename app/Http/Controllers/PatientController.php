<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

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
            'jmbg' => 'required|digits:13|unique:patients'
        ]);

        $patient = new Patient(request(['pat_name', 'pat_surname', 'jmbg']));

        $patient->save();

        session()->flash('message', 'Patient successfully added');

        return redirect('/patients');
    }
}
