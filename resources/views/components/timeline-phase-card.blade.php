@props(['phase' => 'Tahap 1', 'title' => 'Fondasi Organisasi', 'period' => '1965', 'body' => 'Ringkasan fase sejarah organisasi.'])

<article class="relative pl-8">
    <span class="absolute left-0 top-1.5 h-3 w-3 rounded-full border-2 border-white bg-accent ring-2 ring-accent/30" aria-hidden="true"></span>
    <p class="text-[11px] font-bold uppercase tracking-[0.16em] text-accent">{{ $phase }} · {{ $period }}</p>
    <h3 class="mt-2 text-base font-bold text-ink">{{ $title }}</h3>
    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $body }}</p>
</article>
