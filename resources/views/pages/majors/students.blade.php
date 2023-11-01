@extends('layouts.default')

@section('content')
    <x-navbar title="Siswa Jurusan" />
    <div class="container-sch-admin mx-auto">
        <div class="bg-white p-3 shadow rounded">
            <div class="d-flex gap-3">
                <x-form.textbox name="" style="width: 30rem" type="text" label="Nama Kelas" value="{{ $major->name }}"
                    disabled />
                <x-form.textbox name="" style="width: 29.5rem" type="text" label="Tahun Ajaran"
                    value="{{ $major->school_year }}" disabled />
            </div>
            <x-majors.students.table :students=$students />
        </div>
    </div>
@endsection
