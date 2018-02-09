@extends('layouts.master')

@section('content')

    <div class="col-lg-4">
        <h2>Doctor info</h2>
        <hr>
        <h3>Doctor name: {{ $doctor->doc_name }}</h3>
        <h3>Doctor surname: {{ $doctor->doc_surname }}</h3>

        @include('layouts.button', ['action' => "doctors/$doctor->id/edit", 'btn_name' => 'Edit doctor'])
        @include('layouts.button', ['action' => "doctors/$doctor->id", 'btn_name' => 'Delete doctor', 'delete' => 'yes'])
    </div>

    <div class="col-lg-4">
        <h2>Records info</h2>
        @if(count($doctor->records))
            @foreach($doctor->records as $record)
                <hr>
                <h3>Record #: {{ $record->id }}</h3>
                <h3>Record type: {{ $record->record_type }}</h3>
                <h3>Patient: {{ $record->patients[0]->pat_surname }}, {{ $record->patients[0]->pat_name }}</h3>
            @endforeach
        @endif
    </div>

@endsection