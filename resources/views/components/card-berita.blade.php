@props(['title' => 'Judul warta', 'excerpt' => '', 'category' => 'Warta', 'date' => 'Oktober 2025', 'href' => null])

@php($href = $href ?? route('berita.detail'))

<article class="group overflow-hidden rounded-sm border border-line bg-white transition hover:border-ink/30 hover:shadow-sm">
    <a href="{{ $href }}" class="block" aria-label="Baca {{ $title }}">
        <div class="grid aspect-[16/9] place-items-center bg-paper text-[11px] font-bold uppercase tracking-[0.2em] text-muted">
            {{ $category }}
        </div>
        <div class="space-y-2 p-4">
            <p class="text-[11px] font-semibold uppercase tracking-wide text-accent">{{ $category }} · {{ $date }}</p>
            <h3 class="text-sm font-bold leading-snug text-ink group-hover:text-accent">{{ $title }}</h3>
            @if ($excerpt)
                <p class="line-clamp-3 text-xs leading-relaxed text-muted">{{ $excerpt }}</p>
            @endif
            <span class="inline-block pt-1 text-xs font-bold text-ink group-hover:text-accent">Baca selengkapnya →</span>
        </div>
    </a>
</article>
