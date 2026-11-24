@props(['title' => 'Judul karya ilmiah', 'authors' => 'Tim Peneliti GMNI', 'category' => 'Artikel', 'year' => '2025', 'abstract' => '', 'href' => null])

@php($href = $href ?? route('ilmiyah.detail'))

<article class="group flex h-full flex-col rounded-sm border border-line bg-white p-5 transition hover:border-ink/30 hover:shadow-sm">
    <div class="flex items-center justify-between gap-3 text-[11px] font-bold uppercase tracking-wide">
        <span class="text-accent">{{ $category }}</span>
        <span class="text-muted">{{ $year }}</span>
    </div>
    <h3 class="mt-3 text-base font-bold leading-snug text-ink group-hover:text-accent">
        <a href="{{ $href }}">{{ $title }}</a>
    </h3>
    <p class="mt-2 text-xs font-semibold text-muted">{{ $authors }}</p>
    @if ($abstract)
        <p class="mt-3 line-clamp-3 text-xs leading-relaxed text-muted">{{ $abstract }}</p>
    @endif
    <a href="{{ $href }}" class="mt-auto inline-flex pt-4 text-xs font-bold text-ink group-hover:text-accent">
        Lihat naskah →
    </a>
</article>
