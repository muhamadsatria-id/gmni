@props(['name' => 'Kader GMNI', 'date' => '12 Oktober 2025', 'body' => 'Tulisan ini banyak membantu saya memahami arah kaderisasi di tingkat cabang.'])

<article class="rounded-sm border border-line bg-surface p-4">
    <div class="flex items-center gap-3">
        <span class="grid h-9 w-9 place-items-center rounded-sm bg-ink text-xs font-bold text-brand">
            {{ collect(explode(' ', $name))->map(fn($word) => mb_substr($word, 0, 1))->take(2)->implode('') }}
        </span>
        <div>
            <p class="text-sm font-bold text-ink">{{ $name }}</p>
            <p class="text-[11px] text-muted">{{ $date }}</p>
        </div>
    </div>
    <p class="mt-3 text-sm leading-relaxed text-ink/80">{{ $body }}</p>
</article>
