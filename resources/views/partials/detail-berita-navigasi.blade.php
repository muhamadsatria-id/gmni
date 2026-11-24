<nav class="flex flex-col gap-3 border-t border-line pt-6 text-sm sm:flex-row sm:justify-between" aria-label="Navigasi artikel">
    <a href="{{ route('berita') }}" class="group flex items-center gap-2 font-bold text-ink hover:text-accent">
        <span aria-hidden="true">←</span>
        <span><span class="block text-[11px] font-semibold text-muted">Sebelumnya</span>Warta lainnya</span>
    </a>
    <a href="{{ route('berita') }}" class="group flex items-center gap-2 font-bold text-ink hover:text-accent sm:text-right">
        <span><span class="block text-[11px] font-semibold text-muted">Berikutnya</span>Kembali ke arsip</span>
        <span aria-hidden="true">→</span>
    </a>
</nav>
