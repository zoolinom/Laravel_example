@extends('layouts.master')

@section('content')

    <div class="col-lg-8">

        <h1>Insert new record</h1>

        <form method="post" action="/records">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Record type:</label>

                <input type="text" class="form-control" id="record_type" name="record_type">

            </div>

            <div class="form-group">

                <label for="name">Patient:</label>

                <select name="pat_id">

                    @foreach($patients as $patient)

                        <option value="{{ $patient->id }}">{{ $patient->id }} , {{ $patient->pat_name }} , {{ $patient->pat_surname }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label for="name">Doctor:</label>

                <select name="doc_id">

                    @foreach($doctors as $doctor)

                        <option value="{{ $doctor->id }}">{{ $doctor->id }} , {{ $doctor->doc_name }} , {{ $doctor->doc_surname }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Insert</button>

            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection