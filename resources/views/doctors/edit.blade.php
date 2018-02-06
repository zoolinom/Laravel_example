@extends('layouts.master')

@section('content')

    <div class="col-lg-12">

        <h1>Update doctor</h1>

        <hr>

        <form method="post" action="/doctors/{{ $doctor->id }}">

            {{ csrf_field() }}

            {{ method_field('PUT') }}

            <div class="form-group">

                <label for="name">Doctor name:</label>

                <input type="text" value="{{ $doctor->doc_name }}" class="form-control" id="doc_name" name="doc_name">

            </div>

            <div class="form-group">

                <label for="surname">Doctor surname:</label>

                <input type="text" value="{{ $doctor->doc_surname }}" class="form-control" id="doc_surname" name="doc_surname">

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection
