<div class="flex flex-col gap-4 border-b border-line pb-6 lg:flex-row lg:items-center lg:justify-between">
    <div data-filter-group data-filter-scope class="flex flex-wrap items-center gap-2">
        @foreach (['all' => 'Semua', 'artikel' => 'Artikel', 'jurnal' => 'Jurnal', 'buku' => 'Buku'] as $value => $label)
            <button type="button" data-filter="{{ $value }}" aria-pressed="{{ $value === 'all' ? 'true' : 'false' }}"
                class="rounded-sm border border-line bg-white px-3 py-2 text-xs font-bold text-ink hover:border-ink/40">
                {{ $label }}
            </button>
        @endforeach
    </div>
    <label class="relative block w-full lg:max-w-xs">
        <span class="sr-only">Cari karya ilmiah</span>
        <input type="search" data-search-input placeholder="Cari judul atau penulis…"
            class="w-full rounded-sm border border-line bg-white px-3 py-2 text-sm text-ink placeholder:text-muted focus:border-accent focus:outline-none">
    </label>
</div>
