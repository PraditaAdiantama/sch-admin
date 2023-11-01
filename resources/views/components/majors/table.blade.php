<x-table :columns="['', 'Nama Jurusan', 'Aksi']">
    @forelse ($majors as $key => $major)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $major->name }}</td>
            <td class="d-flex justify-content-center gap-3">
                <x-form.button-link link="{{ route('classes.show', $major->id) }}" text="Detail" type="primary" />
                <form action="">
                    @csrf
                    <button class="btn btn-danger fw-bold py-2">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="100%" class="py-5 fs-2 fw-bold">
                Data tidak ditemukan
            </td>
        </tr>
    @endforelse
</x-table>
