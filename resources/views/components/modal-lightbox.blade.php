@props(['id' => 'lightbox-1', 'title' => 'Dokumentasi kegiatan', 'meta' => 'Arsip visual DPC GMNI Sukabumi Raya'])

<div id="{{ $id }}" data-modal role="dialog" aria-modal="true" aria-labelledby="{{ $id }}-title" aria-hidden="true"
    class="fixed inset-0 z-[90] hidden items-center justify-center bg-black/80 p-4">
    <div class="w-full max-w-3xl rounded-sm bg-white p-4 shadow-xl">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h2 id="{{ $id }}-title" class="text-base font-bold text-ink">{{ $title }}</h2>
                <p class="mt-1 text-xs text-muted">{{ $meta }}</p>
            </div>
            <button type="button" data-modal-close aria-label="Tutup"
                class="grid h-9 w-9 shrink-0 place-items-center rounded-sm border border-line text-ink hover:bg-paper">
                ✕
            </button>
        </div>
        <div class="mt-4 grid aspect-video place-items-center rounded-sm bg-paper text-xs font-bold uppercase tracking-[0.2em] text-muted">
            Pratinjau media
        </div>
        <p class="mt-4 text-xs leading-relaxed text-muted">
            Media contoh untuk kebutuhan tampilan. Tidak ada berkas eksternal yang dimuat.
        </p>
    </div>
</div>
