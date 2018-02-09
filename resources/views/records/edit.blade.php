@extends('layouts.master')

@section('content')

    <div class="col-lg-8">

        <h1>Update record</h1>

        <hr>

        <form method="post" action="/records/{{ $record->id }}">

            {{ csrf_field() }}

            {{ method_field('PUT') }}

            <div class="form-group">

                <label for="name">Record type:</label>

                <input type="text" value="{{ $record->record_type }}" class="form-control" id="record_type" name="record_type">

            </div>

            <div class="form-group">

                <label for="name">Patient:</label>

                <select name="pat_id">

                    @foreach($patients as $patient)

                        @if($record->pat_id == $patient->id)
                            <option selected="selected" value="{{ $patient->id }}">{{ $patient->id }} , {{ $patient->pat_name }} , {{ $patient->pat_surname }}</option>
                        @else
                            <option value="{{ $patient->id }}">{{ $patient->id }} , {{ $patient->pat_name }} , {{ $patient->pat_surname }}</option>
                        @endif

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label for="name">Doctor:</label>

                <select name="doc_id">

                    @foreach($doctors as $doctor)

                        @if($record->doc_id == $doctor->id)
                            <option selected="selected" value="{{ $doctor->id }}">{{ $doctor->id }} , {{ $doctor->doc_name }} , {{ $doctor->doc_surname }}</option>
                        @else
                            <option value="{{ $doctor->id }}">{{ $doctor->id }} , {{ $doctor->doc_name }} , {{ $doctor->doc_surname }}</option>
                        @endif

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection