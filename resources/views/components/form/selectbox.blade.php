<div class="mb-3">
    <label for="{{ $name }}-select">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}-select" class="form-select">
        {{ $slot }}
    </select>
</div>
