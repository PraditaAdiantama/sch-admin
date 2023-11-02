<x-table :columns="['', 'Nis', 'Name', 'Kelas', 'Jenis Kelamin', 'Aksi']">
    @forelse ($students as $key => $student)
        <tr class="rounded">
            <td>{{ $key + 1 }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->class->name }}</td>
            <td class="text-capitalize">{{ $student->gender }}</td>
            <td class="d-flex gap-3 justify-content-center">
                <x-form.button-link link="{{ route('students.show', $student->id) }}" type="primary" text="Detail" />
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger fw-bold py-2">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="100%" class="py-5 fw-bold fs-2">
                Data tidak ditemukan
            </td>
        </tr>
    @endforelse
</x-table>
