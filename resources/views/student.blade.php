@extends('layouts.main')

@section('container')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div style="background-color: #435d7d;width: 72vh;">    
        <h1 class="px-3 p-2 text-light">Detail Student</h1>
    </div>
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
    <a href="/modif/editData/{{ $student->id }}" class="btn btn-primary"><i class="bi bi-pencil-square px-1"></i>Edit</a>
    <a class="btn btn-danger" id="myInput" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-trash px-1"></i>Delete</a>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmation</h5>
            </div>
            <div class="modal-body">
              <p>Are you sure to delete {{ $student->name }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button"  class="btn btn-danger"><a class="text-decoration-none text-light" href="/modif/delete/{{ $student->id }}">Delete</a></button>
            </div>
          </div>
        </div>
      </div>

    <script>
    </script>
@endsection