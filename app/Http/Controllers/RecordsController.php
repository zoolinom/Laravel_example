<?php

namespace App\Http\Controllers;

use App\Doctors;
use App\Patient;
use App\Records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $records = Records::all();
        //$patient_id = Records::select('pat_id')->get();
        //dd($patient_id[0]);
        //$patient = Patient::select('pat_name', 'pat_surname')->where('id', $patient_id)->first();
        //$patient = Patient::select('pat_name', 'pat_surname')->where('id', $patient_id)->get();
        //$record = Records::where('pat_id', $patient)->get();

        return view('records.index', compact('records'));
    }

    public function show(Records $record)
    {
        return view('records.show', compact('record'));
    }

    public function create()
    {

        $patients = Patient::all();
        $doctors = Doctors::all();

        return view('records.create', compact('patients', 'doctors'));
    }

    public function store()
    {
        $this->validate(request(), [
           'record_type' => 'required',
            'pat_id' => 'required',
            'doc_id' => 'required'
        ]);

        $record = new Records(request(['record_type', 'pat_id', 'doc_id']));

        $record->save();

        session()->flash('message', 'Record successfully added');

        return redirect('/records');
    }
}
