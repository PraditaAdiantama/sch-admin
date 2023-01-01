@extends('layouts.main')

@section('container')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Student</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('create_data') }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-0">
                                <label for="title" class="form-label">Nis</label>
                                <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('nis')
                                    <div class="invalid-feedback" id="test">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" name="name"
                                    class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
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
                                <input type="text" name="address"
                                    class="form-control  @error('address') is-invalid @enderror" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Birth Place</label>
                                <input type="text" name="birth_place"
                                    class="form-control  @error('birth_place') is-invalid @enderror" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @error('birth_place')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Birth Date</label>
                                <input type="date" name="birth_date"
                                    class="form-control  @error('birth_date') is-invalid @enderror" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @error('birth_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Class</label>
                                <input type="text" name="class"
                                    class="form-control  @error('class') is-invalid @enderror" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
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
    </div>
    <div class="tbl-container">
        <div>
            <table class="">
                <thead>
                    <tr id="table-title">
                        <th>No</th>
                        <th>Name</th>
                        <th>Nis</th>
                        <th>Address</th>
                        <th>Class</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($students as $index => $student)
                        <tr class="table-items {{ $index % 2 == 0 ? 'table-seconds' : '' }}">
                            <th>{{ $no++ }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->nis }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="student/{{ $student->id }}"
                                    class="text-decoration-none btn btn-primary"><i class='bx bxs-edit'></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $students->links('pagination::bootstrap-5') }}
    </div>
@endsection
