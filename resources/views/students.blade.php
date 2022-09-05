@extends('layouts.main')

@section('container')
    <h1>Students</h1>
    <a href="/modif/create" class="btn btn-primary mb-4"> Add</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
    @foreach ($students as $student)
        <div class="p-3 mb-4 card col-md-3">    
            <div>
                    <p>Name : {{ $student->name }}</p>
                    <p>Gender : {{ $student->gender }}</p>
                    <p>Class : {{ $student->class }}</p>
                    <a href="/student/{{ $student->id }}" class="btn btn-primary mt-4">Detail</a>
                    <a href="/modif/delete/{{ $student->id }}" class="btn btn-danger mt-4">Delete</a>   
                </a>
            </div>
        </div>
        @endforeach
    
    
@endsection