<?php

namespace App\Http\Controllers;

use App\Records;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index()
    {
        $records = Records::all();

        return view('records.index', compact('records'));
    }

    public function show(Records $record)
    {
        return view('records.show', compact('record'));
    }
}
