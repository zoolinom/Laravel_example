@extends('layouts.master')

@section('content')

    <div class="col-lg-8">

        <h1>Update patient</h1>

        <hr>

        <form method="post" action="/patients/{{ $patient->id }}">

            {{ csrf_field() }}

            {{ method_field('PUT') }}

            <div class="form-group">

                <label for="name">Patient name:</label>

                <input type="text" value="{{ $patient->pat_name }}" class="form-control" id="pat_name" name="pat_name">

            </div>

            <div class="form-group">

                <label for="surname">Patient surname:</label>

                <input type="text" value="{{ $patient->pat_surname }}" class="form-control" id="pat_surname" name="pat_surname">

            </div>

            <div class="form-group">

                <label for="jmbg">Patient JMBG:</label>

                <input type="text" value="{{ $patient->JMBG }}" class="form-control" id="jmbg" name="jmbg">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection
