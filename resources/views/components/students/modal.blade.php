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
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </x-form.selectbox>
        <x-form.textbox name="birth_date" label="Tanggal Lahir" type="date" required />
        <x-form.selectbox label="Jurusan" name="class_id">
            @forelse ($classes as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
            @empty
                <option value="" disabled selected>Data tidak ditemukan</option>
            @endforelse
        </x-form.selectbox>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary py-2">Tambah</button>
        </div>
    </form>
</x-modal.index>
