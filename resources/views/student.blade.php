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
    <a href="" data-bs-toggle="modal" data-bs-target="#myEditModal" class="btn btn-primary"><i class="bx bxs-edit px-1"></i>Edit</a>
    <a class="btn btn-danger" id="myInput" data-bs-toggle="modal" data-bs-target="#myModal"><i class='bx bx-trash px-1'></i>Delete</a>

    <div id="myEditModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create Student</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('edit_data', $student->id) }}" method="POST">
                    @csrf
                    <div class="mb-3 mt-0">
                        <label for="title" class="form-label">Nis</label>
                        <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->nis }}">
                        @error('nis')
                            <div class="invalid-feedback" id="test">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                    <div class="mb-3">
                      <label for="title" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->name }}">
                      @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Gender</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option value="Men">Man</option>
                            <option value="Women">Women</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->address }}">
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Birth Place</label>
                        <input type="text" name="birth_place" class="form-control  @error('birth_place') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->birth_place }}">
                        @error('birth_place')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Birth Date</label>
                        <input type="date" name="birth_date" class="form-control"  @error('birth_date') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->birth_date }}">
                        @error('birth_date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Class</label>
                        <input type="text" name="class" class="form-control  @error('class') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->class }}">
                        @error('class')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>

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