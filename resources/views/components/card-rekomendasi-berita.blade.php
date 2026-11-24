@props(['title' => 'Warta terkait', 'category' => 'Warta', 'href' => null])

@php($href = $href ?? route('berita.detail'))

<a href="{{ $href }}" class="group flex gap-3 border-b border-line py-3 last:border-0">
    <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-brand transition group-hover:bg-accent" aria-hidden="true"></span>
    <span class="min-w-0">
        <span class="block text-[10px] font-bold uppercase tracking-wide text-accent">{{ $category }}</span>
        <span class="mt-1 block text-sm font-semibold leading-snug text-ink group-hover:text-accent">{{ $title }}</span>
    </span>
</a>
