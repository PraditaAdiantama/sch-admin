@extends('layouts.default')

@section('content')
    <x-navbar title="Jurusan">
        <x-search-form action="" name="class" placeholder="Cari Jurusan" />
    </x-navbar>
    @if ($errors->any())
        {{ $errors }}
    @endif
    <div class="container-sch-admin mx-auto">
        <x-classes.modal :majors="$majors" />
        <div class="bg-white shadow pt-4 px-3 pb-2 rounded">
            <div class="d-flex justify-content-end mb-3">
                <x-modal.trigger text="Tambah" />
            </div>
            <x-classes.table :classes="$classes" />
        </div>
    </div>
@endsection
