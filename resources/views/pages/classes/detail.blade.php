@extends('layouts.default')

@section('content')
    <x-navbar title="Detail Kelas">
        <div class="d-flex gap-3">
            <x-modal.trigger text="Edit" />
        </div>
    </x-navbar>
    <div class="container-sch-admin mx-auto">
        <x-form.button-link link="{{ route('classes.students', $class->id) }}" text="Siswa" type="primary" />
        <x-classes.detail.modal :class=$class :majors=$majors />
        <div class="bg-white rounded shadow mt-3">
        <x-classes.detail.index :class=$class />
        </div>
    </div>
@endsection
