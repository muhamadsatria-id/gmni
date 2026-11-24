<div data-filter-group data-filter-scope class="flex flex-wrap items-center gap-2">
    @foreach (['all' => 'Semua agenda', 'kajian' => 'Kajian', 'rapat' => 'Rapat', 'lapangan' => 'Lapangan'] as $value => $label)
        <button type="button" data-filter="{{ $value }}" aria-pressed="{{ $value === 'all' ? 'true' : 'false' }}"
            class="rounded-sm border border-line bg-white px-3 py-2 text-xs font-bold text-ink hover:border-ink/40">
            {{ $label }}
        </button>
    @endforeach
    <span class="ml-auto text-xs font-semibold text-muted">Bulan: Oktober 2025</span>
</div>
