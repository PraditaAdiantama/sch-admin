@extends('layouts.default')

@section('content')
    <x-navbar title="Detail Siswa">
        <x-modal.trigger text="Edit Siswa" />
    </x-navbar>
    <x-students.detail.modal :classes="$classes" :student="$student" />

    <div class="mx-auto container-sch-admin">
        <x-students.detail.index :student="$student" />
    </div>
@endsection
