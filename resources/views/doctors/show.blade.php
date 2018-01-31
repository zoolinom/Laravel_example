@extends('layouts.master')

@section('content')

    <h2>Doctor info</h2>
    <hr>
    <h3>Doctor name: {{ $doctor->doc_name }}</h3>
    <h3>Doctor surname: {{ $doctor->doc_surname }}</h3>

@endsection