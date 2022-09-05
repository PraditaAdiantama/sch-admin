@extends('layouts.main')

@section('container')
<div class="col-lg-8 m-auto">
    <form action="/modif/createData" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nis</label>
            <input type="number" name="nis" class="form-control @error('nis') is_ @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="title" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Gender</label>
            <select class="form-select" name="gender" aria-label="Default select example">
                <option value="Men">Men</option>
                <option value="Women">Women</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Birth Place</label>
            <input type="text" name="birth_place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Birth Date</label>
            <input type="date" name="birth_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Class</label>
            <input type="text" name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
</div>
@endsection