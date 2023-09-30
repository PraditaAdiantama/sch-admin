@extends('layouts.default')

@section('content')
    <x-navbar title="Jurusan">
        <x-search-form action="" placeholder="Cari Jurusan" />
    </x-navbar>
    <div class="container-sch-admin mx-auto">
        <div class="bg-white shadow pt-4 px-3 pb-2 rounded">
            <x-majors.table :majors="$majors" />
        </div>
    </div>
@endsection