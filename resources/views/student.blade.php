@extends('layouts.main')

@section('container')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
    <div class="card">
        <p>Nis     : {{ $student->nis }}</p>
        <p>Name    : {{ $student->name }}</p>
        <p>Gender    : {{ $student->gender }}</p>
        <p>Address : {{ $student->address }}</p>
        <p>Birth Place    : {{ $student->birth_place }}</p>
        <p>Birth Date    : {{ $student->birth_date }}</p>
        <p>Class   : {{ $student->class }}</p>
    </div>
    <a href="/modif/editData/{{ $student->id }}" class="btn btn-primary">Edit</a>
    <a href="/modif/delete/{{ $student->id }}" class="btn btn-danger">Delete</a>
@endsection