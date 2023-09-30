<x-modal.index title="Tambah Siswa">
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="d-flex justify-content-between">
            <x-form.textbox name="nis" label="Nis Siswa" type="number" required placeholder="Nis siswa" />
            <x-form.textbox name="name" label="Nama Siswa" type="text" required placeholder="Nama siswa" />
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <x-form.textbox name="address" label="Alamat Siswa" type="text" required placeholder="Alamat siswa" />
            <x-form.textbox name="birth_place" label="Tempat Lahir" type="text" required placeholder="Tempat Lahir" />
        </div>
        <x-form.selectbox label="Jenis Kelamin" name="gender">
            <option value="Laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </x-form.selectbox>
        <x-form.textbox name="birth_date" label="Tanggal Lahir" type="date" required />
        <x-form.selectbox label="Jurusan" name="major_id">
            @forelse ($majors as $major)
                <option value="{{ $major->id }}">{{ $major->name }}</option>
            @empty
                <option value="" disabled selected>Data tidak ditemukan</option>
            @endforelse
        </x-form.selectbox>
        <button class="btn btn-success">Tambah</button>
    </form>
</x-modal.index>
