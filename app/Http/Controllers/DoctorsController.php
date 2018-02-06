<?php

namespace App\Http\Controllers;

use App\Doctors;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $doctors = Doctors::all();

        return view('doctors.index', compact('doctors'));
    }

    public function show(Doctors $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'doc_name' => 'required',
            'doc_surname' => 'required'
        ]);

        $doctor = new Doctors(request(['doc_name', 'doc_surname']));

        $doctor->save();

        session()->flash('message', 'Doctor successfully added');

        return redirect('/doctors');
    }

    public function edit(Doctors $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Doctors $doctor)
    {
        $this->validate(request(), [
            'doc_name' => 'required',
            'doc_surname' => 'required'
        ]);

        $doctor->doc_name = request('doc_name');
        $doctor->doc_surname = request('doc_surname');

        $doctor->save();

        session()->flash('message', 'Doctor is successfully updated');

        return redirect('/doctors');
    }
}
