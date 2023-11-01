@php
    $grades = ['X', 'XI', 'XII'];
    
    $major_options = ['Broadcast TV & Film', 'Desain Komunikasi Visual', 'Kimia Analisis', 'Teknik Instalasi Tenaga Listrik', 'Teknik Otomasi Industri', 'Teknik Jaringan Komputer dan Telekomunikasi', 'Teknik Otomotif', 'Teknik Las', 'Teknik Mesin'];
@endphp
<x-modal.index title="Edit Kelas">
    <form action="{{ route('classes.update', $major->id) }}" method="POST">
        @csrf
        @method("PUT")
        <x-form.textbox name="name" value="{{ $major->name }}" type="text" label="Nama Kelas" placeholder="Nama kelas"
            required />
        <x-form.textbox name="school_year" value="{{ $major->school_year }}" type="text" label="Tahun Ajaran"
            placeholder="Tahun ajaran" required />
        <x-form.selectbox name="grade" label="Tingkat">
            @foreach ($grades as $grade)
                <option value="{{ $grade }}" {{ $grade == $major->grade ? 'selected' : '' }}>{{ $grade }}
                </option>
            @endforeach
        </x-form.selectbox>
        <x-form.selectbox name="major" label="Jurusan">
            @foreach ($major_options as $major_all)
                <option value="{{ $major_all }}" {{ $major_all == $major->major ? 'selected' : '' }}>
                    {{ $major_all }}</option>
            @endforeach
        </x-form.selectbox>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Edit</button>
        </div>
    </form>
</x-modal.index>
