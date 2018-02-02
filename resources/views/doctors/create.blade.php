@extends('layouts.master')

@section('content')

    <div class="col-lg-12">

        <h1>Insert new doctor</h1>

        <form method="post" action="/doctors">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Doctor name:</label>

                <input type="text" class="form-control" id="doc_name" name="doc_name">

            </div>

            <div class="form-group">

                <label for="name">Doctor surname:</label>

                <input type="text" class="form-control" id="doc_surname" name="doc_surname">

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Insert</button>

            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection