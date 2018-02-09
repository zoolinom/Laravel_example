@extends('layouts.master')

@section('content')

    <div class="col-lg-8">

        <h2>Doctors Table</h2>

        <table class="table table-bordered">

            <thead>

            <tr>

                <th class="col-lg-4">Doctor name</th>

                <th class="col-lg-4">Doctor surname</th>

            </tr>

            </thead>

            <tbody>

            @foreach($doctors as $doctor)
                <tr>

                    <td class="col-lg-8"><a href="doctors/{{ $doctor->id }}">{{ $doctor->doc_name }}</a></td>

                    <td class="col-lg-8"><a href="doctors/{{ $doctor->id }}">{{ $doctor->doc_surname }}</a></td>

                </tr>
            @endforeach

            </tbody>

        </table>

        @include('layouts.button', ['action' => 'doctors/create', 'btn_name' => 'Create'])

    </div>

@endsection