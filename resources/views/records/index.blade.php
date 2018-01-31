@extends('layouts.master')

@section('content')

    <h2>Records Table</h2>

    <table class="table table-bordered">

        <thead>

        <tr>

            <th class="col-lg-3">Record #</th>

            <th class="col-lg-3">Record type</th>

            <th class="col-lg-3">Patient id</th>

            <th class="col-lg-3">Doctor id</th>

        </tr>

        </thead>

        <tbody>

        @foreach($records as $record)
            <tr>

                <td class="col-lg-3"><a href="records/{{ $record->id }}">{{ $record->id }}</a></td>

                <td class="col-lg-3"><a href="records/{{ $record->id }}">{{ $record->record_type }}</a></td>

                <td class="col-lg-3"><a href="records/{{ $record->id }}">{{ $record->pat_id }}</a></td>

                <td class="col-lg-3"><a href="records/{{ $record->id }}">{{ $record->doc_id }}</a></td>

            </tr>
        @endforeach

        </tbody>

    </table>

@endsection