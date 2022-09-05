@extends('layouts.main')

@section('container')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
    <h1 class="pb-3">Detail Student</h1>
    <div class="col-lg-5">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row" class="col-3">Nis </th>
                    <td>{{ $student->nis }}</td>
                </tr>
                <tr>
                    <th scope="row" class="col-2">Name</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th scope="row" class="col-2">address</th>
                    <td>{{ $student->address }}</td>
                </tr>
                <tr>
                    <th scope="row" class="col-2">Birt Place</th>
                    <td>{{ $student->birth_place }}</td>
                </tr>
                <tr>
                    <th scope="row" class="col-2">Birt Date</th>
                    <td>{{ $student->birth_date }}</td>
                </tr>
                <tr>
                    <th scope="row" class="col-2">Class</th>
                    <td>{{ $student->class }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="/modif/editData/{{ $student->id }}" class="btn btn-primary">Edit</a>
    <a href="/modif/delete/{{ $student->id }}" class="btn btn-danger">Delete</a>
@endsection