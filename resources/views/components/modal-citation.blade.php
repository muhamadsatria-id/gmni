@props(['id' => 'citation-1', 'title' => 'Sitasi naskah', 'citation' => 'GMNI Sukabumi Raya. (2025). Judul Kajian. Jurnal Kaderisasi, 1(1), 1–10.'])

<div id="{{ $id }}" data-modal role="dialog" aria-modal="true" aria-labelledby="{{ $id }}-title" aria-hidden="true"
    class="fixed inset-0 z-[90] hidden items-center justify-center bg-black/80 p-4">
    <div class="w-full max-w-lg rounded-sm bg-white p-6 shadow-xl">
        <div class="flex items-start justify-between gap-4">
            <h2 id="{{ $id }}-title" class="text-base font-bold text-ink">{{ $title }}</h2>
            <button type="button" data-modal-close aria-label="Tutup"
                class="grid h-9 w-9 shrink-0 place-items-center rounded-sm border border-line text-ink hover:bg-paper">✕</button>
        </div>
        <pre class="mt-4 overflow-x-auto rounded-sm bg-paper p-4 text-xs leading-relaxed text-ink">{{ $citation }}</pre>
        <p class="mt-3 text-xs text-muted">Salin format sitasi di atas untuk keperluan referensi.</p>
    </div>
</div>
