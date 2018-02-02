@extends('layouts.master')

@section('content')

    <div class="row">
    <div class="col-lg-6">
    <h2>Patient info</h2>
    <hr>
    <h3>Patient name: {{ $patient->pat_name }}</h3>
    <h3>Patient surname: {{ $patient->pat_surname }}</h3>
    <h3>Patient JMBG: {{ $patient->JMBG }}</h3>
    </div>
    <div class="col-lg-6">
    <h2>Patient records</h2>
    @if(count($patient->records))
        @foreach($patient->records as $record)
            <hr>
            <h3>Record #: {{ $record->id }}</h3>
            <h3>Record type: {{ $record->record_type }}</h3>
            <h3>Doctor: {{ $record->doctors[0]->doc_surname }}, {{ $record->doctors[0]->doc_name }}</h3>
        @endforeach
    @endif
    </div>
    </div>

@endsection