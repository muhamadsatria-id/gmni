@props(['id' => '1', 'title' => 'Dokumentasi kegiatan', 'category' => 'Kegiatan', 'caption' => ''])

<button type="button" data-modal-open="lightbox-{{ $id }}"
    class="group overflow-hidden rounded-sm border border-line bg-white text-left transition hover:border-ink/30 hover:shadow-sm"
    aria-label="Buka gambar {{ $title }}">
    <div class="grid aspect-[4/3] place-items-center bg-gradient-to-br from-paper to-white text-[11px] font-bold uppercase tracking-[0.2em] text-muted">
        {{ $category }}
    </div>
    <div class="space-y-1 p-3">
        <p class="text-sm font-bold text-ink group-hover:text-accent">{{ $title }}</p>
        @if ($caption)
            <p class="text-xs text-muted">{{ $caption }}</p>
        @endif
    </div>
</button>
