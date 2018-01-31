@extends('layouts.master')

@section('content')

    <h2>Record info</h2>
    <hr>
    <h3>Record #: {{ $record->id }}</h3>
    <h3>Record type: {{ $record->record_type }}</h3>
    <h3>Patient id: {{ $record->pat_id }}</h3>
    <h3>Doctor id: {{ $record->doc_id }}</h3>

@endsection