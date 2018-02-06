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

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Patient $patient)
    {
        $this->validate(request(), [
            'pat_name' => 'required',
            'pat_surname' => 'required',
            'jmbg' => 'required|digits:13'
        ]);

        $patient->pat_name = request('pat_name');
        $patient->pat_surname = request('pat_surname');
        $patient->JMBG = request('jmbg');

        $patient->save();

        session()->flash('message', 'Patient is successfully updated');

        return redirect('/patients');
    }

    public function destroy(Patient $patient)
    {
        //dd('delete');

        $patient->records()->delete();

        $patient->delete();

        session()->flash('message', 'Patient is successfully deleted');

        return redirect('/patients');
    }
}
