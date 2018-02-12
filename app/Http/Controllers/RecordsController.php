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
        $records = Records::filter(request(['month', 'year']))
            ->get();
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
            'doc_id' => 'required'],
            ['required' => 'The :attribute can not be empty'],
            [
                'record_type' => 'type of record',
                'pat_id' => 'patient',
                'doc_id' => 'doctor'

            ]);

        $record = new Records(request(['record_type', 'pat_id', 'doc_id']));

        $record->save();

        session()->flash('message', 'Record successfully added');

        return redirect('/records');
    }

    public function edit(Records $record)
    {
        $patients = Patient::all();
        $doctors = Doctors::all();

        return view('records.edit', compact('record', 'patients', 'doctors'));
    }

    public function update(Records $record)
    {
        $this->validate(request(), [
            'record_type' => 'required',
            'pat_id' => 'required',
            'doc_id' => 'required'],
            ['required' => 'The :attribute can not be empty'],
            [
                'record_type' => 'type of record',
                'pat_id' => 'patient',
                'doc_id' => 'doctor'

            ]);

        $record->record_type = request('record_type');
        $record->pat_id = request('pat_id');
        $record->doc_id = request('doc_id');

        $record->save();

        session()->flash('message', 'Record is successfully updated');

        return redirect('/records');
    }

    public function destroy(Records $record)
    {
        $record->delete();

        session()->flash('message', 'Record is successfully deleted');

        return redirect('/records');
    }
}
