<div data-filter-group data-filter-scope class="flex flex-wrap items-center gap-2">
    @foreach (['all' => 'Semua', 'aktif' => 'Aktif', 'alumni' => 'Alumni'] as $value => $label)
        <button type="button" data-filter="{{ $value }}" aria-pressed="{{ $value === 'all' ? 'true' : 'false' }}"
            class="rounded-sm border border-line bg-white px-3 py-2 text-xs font-bold text-ink hover:border-ink/40">
            {{ $label }}
        </button>
    @endforeach
</div>
