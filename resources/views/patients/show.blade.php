@extends('layouts.master')

@section('content')

    <h2>Patient info</h2>
    <hr>
    <h3>Patient name: {{ $patient->pat_name }}</h3>
    <h3>Patient surname: {{ $patient->pat_surname }}</h3>
    <h3>Patient JMBG: {{ $patient->JMBG }}</h3>

@endsection