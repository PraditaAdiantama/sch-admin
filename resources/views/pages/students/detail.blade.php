@extends('layouts.default')

@section('content')
    <x-navbar title="Detail Siswa">
        <x-modal.trigger text="Edit Siswa" />
    </x-navbar>

    <x-students.detail.modal :majors="$majors" :student="$student" />
    <div class="mx-auto" style="max-width: 1000px">
        <x-students.detail.index :student="$student" />
    </div>
@endsection
