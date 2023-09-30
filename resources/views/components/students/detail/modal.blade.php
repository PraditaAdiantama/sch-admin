<x-modal.index title="Tambah Siswa">
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="d-flex justify-content-between">
            <x-form.textbox name="nis" label="Nis Siswa" type="number" value="{{ $student->nis }}"
                placeholder="Nis siswa" />
            <x-form.textbox name="name" label="Nama Siswa" type="text" value="{{ $student->name }}"
                placeholder="Nama siswa" />
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <x-form.textbox name="address" label="Alamat Siswa" type="text" value="{{ $student->address }}"
                placeholder="Alamat siswa" />
            <x-form.textbox name="birth_place" label="Tempat Lahir" type="text" value="{{ $student->birth_place }}"
                placeholder="Tempat Lahir" />
        </div>
        <x-form.selectbox label="Jenis Kelamin" name="gender">
            <option value="laki-laki" {{ strtolower($student->gender) == 'laki-laki' ? 'selected' : '' }}>Laki-laki
            </option>
            <option value="perempuan" {{ strtolower($student->gender) == 'perempuan' ? 'selected' : '' }}>Perempuan
            </option>
        </x-form.selectbox>
        <x-form.textbox name="birth_date" label="Tanggal Lahir" type="date" value="{{ $student->birth_date }}" />
        <x-form.selectbox label="Jurusan" name="major_id">
            @forelse ($majors as $major)
                <option value="{{ $major->id }}" {{ $major->id == $student->major->id ? 'selected' : '' }}>
                    {{ $major->name }}
                </option>
            @empty
                <option value="" disabled selected>Data tidak ditemukan</option>
            @endforelse
        </x-form.selectbox>
        <button class="btn btn-success">Edit siswa</button>
    </form>
</x-modal.index>
