@props(['id' => 'video-1', 'title' => 'Video dokumentasi', 'duration' => '03:24', 'category' => 'Video'])

<button type="button" data-modal-open="lightbox-{{ $id }}"
    class="group relative block overflow-hidden rounded-sm border border-line bg-ink text-left transition hover:border-accent"
    aria-label="Putar video {{ $title }}">
    <div class="grid aspect-video place-items-center bg-ink-soft">
        <span class="grid h-12 w-12 place-items-center rounded-full bg-brand text-ink transition group-hover:scale-105">
            <svg class="ml-0.5 h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z" /></svg>
        </span>
    </div>
    <div class="flex items-center justify-between gap-3 p-4 text-white">
        <div>
            <p class="text-[11px] font-bold uppercase tracking-wide text-brand">{{ $category }}</p>
            <p class="mt-1 text-sm font-bold">{{ $title }}</p>
        </div>
        <span class="shrink-0 rounded-sm bg-white/10 px-2 py-1 text-[11px] font-semibold">{{ $duration }}</span>
    </div>
</button>
