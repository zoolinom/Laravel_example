@extends('layouts.master')

@section('content')

    <h2>Patients Table</h2>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th class="col-lg-4">Patient name</th>

                <th class="col-lg-4">Patient surname</th>

                <th class="col-lg-4">JMBG</th>

            </tr>

        </thead>

        <tbody>

            @foreach($patients as $patient)
                <tr>

                    <td class="col-lg-4"><a href="patients/{{ $patient->id }}">{{ $patient->pat_name }}</a></td>

                    <td class="col-lg-4"><a href="patients/{{ $patient->id }}">{{ $patient->pat_surname }}</a></td>

                    <td class="col-lg-4"><a href="patients/{{ $patient->id }}">{{ $patient->JMBG }}</a></td>

                </tr>
            @endforeach

        </tbody>

    </table>

    @include('layouts.button', ['page' => 'patients'])

@endsection