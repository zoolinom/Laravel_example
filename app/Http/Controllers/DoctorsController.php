<?php

namespace App\Http\Controllers;

use App\Doctors;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctors::all();

        return view('doctors.index', compact('doctors'));
    }

    public function show(Doctors $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }
}
