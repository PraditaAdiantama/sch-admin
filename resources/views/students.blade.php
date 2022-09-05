@extends('layouts.main')

@section('container')
    <h1>Students</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif
    <div class="row g-3">    
        @foreach ($students as $student)
        <div class="col-lg-3">
            <a href="/student/{{ $student->id }}" class="card text-dark text-decoration-none p-4">
                <p>Name : {{ $student->name }}</p>
                <p>Gender : {{ $student->gender }}</p>
                <p>Class : {{ $student->class }}</p>
            </a>
        </div>
        @endforeach
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">        
            <a href="/modif/create" class="h-100 card border-bottom-0 text-success border-success"> 
                <h3 class="p-3">Add Students +<h3>
            </a>
        </div>
    </div>
    
    
@endsection