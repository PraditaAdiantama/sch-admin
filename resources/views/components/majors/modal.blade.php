@php
    $grades = ['X', 'XI', 'XII'];
@endphp
<x-modal.index title="Tambah Kelas">
    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        <x-form.textbox name="name" type="text" label="Nama Kelas" placeholder="Nama kelas" required />
        <x-form.textbox name="school_year" type="text" label="Tahun Ajaran" placeholder="Tahun ajaran" required />
        <x-form.selectbox name="grade" label="Tingkat">
            @foreach ($grades as $grade)
                <option value="{{ $grade }}">{{ $grade }}</option>
            @endforeach
        </x-form.selectbox>
        <x-form.selectbox name="major" label="Jurusan">
            @foreach ($majors as $major)
                <option value="{{ $major }}">{{ $major }}</option>
            @endforeach
        </x-form.selectbox>
        <div class="d-flex justify-content-end">
            <button class="btn btn-success" type="submit">Tambah</button>
        </div>
    </form>
</x-modal.index>
