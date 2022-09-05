@extends('layouts.main')

@section('container')
<div class="col-md-4">
    <form action="/modif/createData" method="POST">
        @csrf
        <h1>Add Student</h1>
        <div class="mb-3 mt-4">
            <label for="title" class="form-label">Nis</label>
            <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('nis')
                <div class="invalid-feedback" id="test">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
          <label for="title" class="form-label">Name</label>
          <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
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
            <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Birth Place</label>
            <input type="text" name="birth_place" class="form-control  @error('birth_place') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('birth_place')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Birth Date</label>
            <input type="date" name="birth_date" class="form-control  @error('birth_date') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('birth_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Class</label>
            <input type="text" name="class" class="form-control  @error('class') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('class')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Save</button>
      </form>
</div>

@endsection