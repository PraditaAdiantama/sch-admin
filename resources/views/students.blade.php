@extends('layouts.main')

@section('container')
    <div class="">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Students</h1>
            <a href="modif/create" class="btn btn-success"><i class="bi bi-plus-circle-fill p-1"></i> Add New Student</a>
        </div>
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
                      <th>No</th>
                      <th>Nis</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Class</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($students as $index => $student)
                    <tr>
                        <th scope="row">{{ $index + $students->firstitem() }}</th>
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
        {{ $students->links('pagination::bootstrap-5') }}
    </div>
@endsection