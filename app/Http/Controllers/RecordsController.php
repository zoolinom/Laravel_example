<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
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
}
