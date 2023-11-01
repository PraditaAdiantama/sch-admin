<x-table :columns="['', 'Nis', 'Name', 'Kelas', 'Jenis Kelamin', 'Aksi']">
    @forelse ($students as $key => $student)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->major->name }}</td>
            <td class="text-capitalize">{{ $student->gender }}</td>
            <td class="d-flex gap-3 justify-content-center">
                <x-form.button-link link="{{ route('students.show', $student->id) }}" text="Detail" type="primary" />
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="100%" class="py-5 fw-bold fs-2 ">
                Data tidak ditemukan
            </td>
        </tr>
    @endforelse
</x-table>
