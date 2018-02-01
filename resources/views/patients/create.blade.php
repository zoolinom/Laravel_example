@extends('layouts.master')

@section('content')

    <div class="col-lg-12">

        <h1>Insert new patient</h1>

        <hr>

        <form method="post" action="/patients">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Patient name:</label>

                <input type="text" class="form-control" id="pat_name" name="pat_name">

            </div>

            <div class="form-group">

                <label for="surname">Patient surname:</label>

                <input type="text" class="form-control" id="pat_surname" name="pat_surname">

            </div>

            <div class="form-group">

                <label for="jmbg">Patient JMBG:</label>

                <input type="text" class="form-control" id="jmbg" name="jmbg">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Insert</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection