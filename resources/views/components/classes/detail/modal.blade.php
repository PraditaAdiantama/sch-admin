@php
    $grades = ['X', 'XI', 'XII'];
@endphp
<x-modal.index title="Edit Kelas">
    <form action="{{ route('classes.update', $class->id) }}" method="POST">
        @csrf
        @method("PUT")
        <x-form.textbox name="name" value="{{ $class->name }}" type="text" label="Nama Kelas" placeholder="Nama kelas"
            required />
        <x-form.textbox name="school_year" value="{{ $class->school_year }}" type="text" label="Tahun Ajaran"
            placeholder="Tahun ajaran" required />
        <x-form.selectbox name="grade" label="Tingkat">
            @foreach ($grades as $grade)
                <option value="{{ $grade }}" {{ $grade == $class->grade ? 'selected' : '' }}>{{ $grade }}
                </option>
            @endforeach
        </x-form.selectbox>
        <x-form.selectbox name="major_id" label="Jurusan">
            @foreach ($majors as $major)
                <option value="{{ $major->id }}" {{ $major->id == $class->id ? 'selected' : '' }}>
                    {{ $major->name }}</option>
            @endforeach
        </x-form.selectbox>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Edit</button>
        </div>
    </form>
</x-modal.index>
