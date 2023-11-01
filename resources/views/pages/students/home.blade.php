@extends('layouts.default')

@section('content')
    <div class="w-100">
        <div class="mx-auto" style="max-width: 1000px">
            @if ($errors->any())
                {{ $errors }}
            @endif
            <x-navbar title="Siswa">
                <x-search-form action="{{ route('students.index') }}" name="search_student" placeholder="Cari siswa" />
            </x-navbar>
            <div class="bg-white shadow pt-4 px-3 pb-2 rounded">
                <x-students.modal :majors="$majors" />
                <div class="d-flex justify-content-end mb-3">
                    <x-modal.trigger text="Tambah" />
                </div>
                <x-students.table :students="$students" />
            </div>
        </div>
    </div>
@endsection
