<div class="p-3">
    <div class="d-flex gap-4 jutify-content-between">
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Nama Kelas" value="{{ $class->name }}" disabled />
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Tahun Ajaran" value="{{ $class->school_year }}" disabled />
    </div>
    <div class="d-flex gap-4 jutify-content-between">
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Tingkat" value="{{ $class->grade }}" disabled />
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Jurusan" value="{{ $class->major->name }}" disabled />
    </div>
</div>
