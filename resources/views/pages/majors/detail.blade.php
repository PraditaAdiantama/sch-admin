@extends('layouts.default')

@section('content')
    <x-navbar title="Detail Kelas">
        <div class="d-flex gap-3">
            <x-modal.trigger text="Edit" />
        </div>
    </x-navbar>
    <div class="container-sch-admin mx-auto">
        <x-form.button-link link="{{ route('classes.students', $major->id) }}" text="Siswa" type="primary" />
        <x-majors.detail.modal :major=$major />
        <div class="bg-white rounded shadow mt-3">
            <x-majors.detail.index :major=$major />
        </div>
    </div>
@endsection
