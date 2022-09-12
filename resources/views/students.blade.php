@extends('layouts.main')

@section('container')
    <h1 class="align-center">Students</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row g-3">    
        <table class="table">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Nis</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Class</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->class }}</td>
                    <td>
                        <button class="btn btn-primary"><a href="student/{{ $student->id }}" class="text-decoration-none text-light">Detail</a></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>  
        {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="/modif/create" class="p-4 bg-light border border-success d-block text-success h-100"> 
                <h3>Add Students +<h3>
            </a>
        </div> --}}
    {{ $students->links('pagination::bootstrap-5') }}
@endsection