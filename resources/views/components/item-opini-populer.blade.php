@props(['title' => 'Judul opini', 'author' => 'Penulis', 'href' => null])

@php($href = $href ?? route('ilmiyah.detail'))

<article class="flex gap-3 border-b border-line py-3 last:border-0">
    <span class="mt-1 h-2 w-2 shrink-0 bg-accent" aria-hidden="true"></span>
    <div>
        <h3 class="text-sm font-bold leading-snug text-ink hover:text-accent">
            <a href="{{ $href }}">{{ $title }}</a>
        </h3>
        <p class="mt-1 text-[11px] text-muted">Oleh {{ $author }}</p>
    </div>
</article>
