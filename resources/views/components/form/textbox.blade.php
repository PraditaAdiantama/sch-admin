<div class="mb-3">
    <label for="{{ $name }}-input" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}-input" name="{{ $name }}"
        {{ $attributes->class(["form-control"]) }}>
</div>
