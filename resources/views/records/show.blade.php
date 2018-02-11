@extends('layouts.master')

@section('content')

    <div class="col-lg-8">

        <h2>Record info</h2>
        <hr>
        <h3>Record #: {{ $record->id }}</h3>
        <h3>Record type: {{ $record->record_type }}</h3>
        <h3>Record date: {{ $record->created_at->format('l, j. F Y.') }}</h3>
        <h3>Record time: {{ $record->created_at->format('H:i') }}</h3>
        <h3>Patient: {{ $record->patients[0]->pat_name }}, {{ $record->patients[0]->pat_surname }}</h3>
        <h3>Doctor: {{ $record->doctors[0]->doc_name }}, {{ $record->doctors[0]->doc_surname }}</h3>

        @include('layouts.button', ['action' => "records/$record->id/edit", 'btn_name' => 'Edit record'])
        @include('layouts.button', ['action' => "records/$record->id", 'btn_name' => 'Delete record', 'delete' => 'yes'])

    </div>

@endsection