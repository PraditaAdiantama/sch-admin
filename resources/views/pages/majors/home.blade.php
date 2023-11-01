@extends('layouts.default')

@section('content')
    <x-navbar title="Jurusan">
        <x-search-form action="" name="" placeholder="Cari Jurusan" />
    </x-navbar>
    <div class="container-sch-admin mx-auto">
        <x-majors.modal :majors="$major_options"/>
        <div class="bg-white shadow pt-4 px-3 pb-2 rounded">
            <div class="d-flex justify-content-end mb-3">
                <x-modal.trigger text="Tambah"/>
            </div>
            <x-majors.table :majors="$majors" />
        </div>
    </div>
@endsection