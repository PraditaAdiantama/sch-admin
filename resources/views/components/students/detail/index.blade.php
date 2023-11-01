<div class="bg-white p-3 rounded shadow">
    <div class="d-flex justify-content-between" class="w-100">
        <x-form.textbox style="width: 29rem;" name="" type="number" value="{{ $student->nis }}" label="Nis Siswa"
            disabled />
        <x-form.textbox style="width: 29rem;" name="" type="text" value="{{ $student->name }}"
            label="Nama Siswa" disabled />
    </div>
    <div class="d-flex justify-content-between">
        <x-form.textbox style="width: 29rem;" name="" type="text" class="text-capitalize" value="{{ $student->gender }}"
            label="Jenis Kelamin" disabled />
        <x-form.textbox style="width: 29rem;" name="" type="text" value="{{ $student->address }}"
            label="Alamat Siswa" disabled />
    </div>
    <div class="d-flex justify-content-between">
        <x-form.textbox style="width: 29rem;" name="" type="date" value="{{ $student->birth_date }}"
            label="Tanggal Lahir" disabled />
        <x-form.textbox style="width: 29rem;" name="" type="text" value="{{ $student->birth_place }}"
            label="Tempat Lahir" disabled />
    </div>
    <x-form.textbox name="" label="Jurusan" type="text" value="{{ $student->major->name }}" disabled />
</div>
