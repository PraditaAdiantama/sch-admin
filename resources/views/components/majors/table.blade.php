<x-table :columns="['', 'Nama Jurusan', 'Aksi']">
    @forelse ($majors as $key => $major)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $major->name }}</td>
            <td class="d-flex justify-content-center gap-3">
                <x-form.button-link link="{{ route('majors.students', $major->id) }}" text="Siswa" type="primary" />
                <form action="">
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="100%">
                Data tidak ditemukan
            </td>
        </tr>
    @endforelse
</x-table>
