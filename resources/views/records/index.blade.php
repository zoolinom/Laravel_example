@extends('layouts.master')

@section('content')

    <div class="col-lg-8">

        <h2>Records Table</h2>

        <table class="table table-bordered">

            <thead>

            <tr>

                <th class="col-lg-1">Record #</th>

                <th class="col-lg-2">Record type</th>

                <th class="col-lg-2">Patient name</th>

                <th class="col-lg-2">Patient surname</th>

                <th class="col-lg-2">Doctor name</th>

                <th class="col-lg-2">Doctor surname</th>

            </tr>

            </thead>

            <tbody>

            @foreach($records as $record)
                <tr>

                    <td class="col-lg-1"><a href="records/{{ $record->id }}">{{ $record->id }}</a></td>

                    <td class="col-lg-2"><a href="records/{{ $record->id }}">{{ $record->record_type }}</a></td>

                    <td class="col-lg-2"><a href="patients/{{ $record->patients[0]->id }}">{{ $record->patients[0]->pat_name }}</a></td>

                    <td class="col-lg-2"><a href="patients/{{ $record->patients[0]->id }}">{{ $record->patients[0]->pat_surname }}</a></td>

                    <td class="col-lg-2"><a href="doctors/{{ $record->doctors[0]->id }}">{{ $record->doctors[0]->doc_name }}</a></td>

                    <td class="col-lg-2"><a href="doctors/{{ $record->doctors[0]->id }}">{{ $record->doctors[0]->doc_surname }}</a></td>

                </tr>
            @endforeach

            </tbody>

        </table>

        @include('layouts.button', ['action' => 'records/create', 'btn_name' => 'Create'])

    </div>

@endsection