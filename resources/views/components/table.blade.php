<table class="table text-center">
    <thead class="table-primary">
        @foreach ($columns as $column)
            <th class="py-3">{{ $column }}</th>
        @endforeach
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>