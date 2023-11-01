<div class="p-3">
    <div class="d-flex gap-4 jutify-content-between">
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Nama Kelas" value="{{ $major->name }}" disabled />
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Tahun Ajaran" value="{{ $major->school_year }}" disabled />
    </div>
    <div class="d-flex gap-4 jutify-content-between">
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Tingkat" value="{{ $major->grade }}" disabled />
        <x-form.textbox name="" style="width: 29rem;" type="text" label="Jurusan" value="{{ $major->major }}" disabled />
    </div>
</div>
