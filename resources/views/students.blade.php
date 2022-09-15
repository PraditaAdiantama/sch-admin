@extends('layouts.main')

@section('container')
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div id="table-header">
        <h1 class="text-light m-0">Student</h1>
        <a href="modif/create" class="btn btn-success"><i class="bi bi-plus-circle-fill p-1"></i> Add New Student</a>
    </div>
    <div class="tbl-container">
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
                            <a href="student/{{ $student->id }}" class="text-decoration-none text-light btn btn-primary">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>  
        {{ $students->links('pagination::bootstrap-5') }}
    </div>
@endsection