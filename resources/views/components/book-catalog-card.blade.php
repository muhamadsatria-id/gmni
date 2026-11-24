@props(['title' => 'Judul buku', 'author' => 'Penulis', 'year' => '2025', 'type' => 'Buku', 'code' => 'GMN-001'])

<article class="flex gap-4 rounded-sm border border-line bg-white p-4 transition hover:border-ink/30">
    <div class="grid h-24 w-18 shrink-0 place-items-center rounded-sm bg-ink px-2 text-center text-[10px] font-bold uppercase tracking-wider text-brand">
        {{ $type }}
    </div>
    <div class="min-w-0 flex-1">
        <p class="text-[10px] font-bold uppercase tracking-wide text-accent">{{ $code }} · {{ $year }}</p>
        <h3 class="mt-1 text-sm font-bold leading-snug text-ink">{{ $title }}</h3>
        <p class="mt-1 text-xs text-muted">{{ $author }}</p>
        <div class="mt-3 flex flex-wrap gap-2 text-[11px] font-semibold text-muted">
            <span class="rounded-sm bg-paper px-2 py-1">Katalog</span>
            <span class="rounded-sm bg-paper px-2 py-1">Tersedia</span>
        </div>
    </div>
</article>
