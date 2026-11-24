<section class="grid gap-6 py-10 lg:grid-cols-12 lg:items-center">
    <div class="lg:col-span-5">
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Sorotan</p>
        <h2 class="mt-3 text-2xl font-black tracking-tight text-ink sm:text-3xl">Rakernas Cabang 2025</h2>
        <p class="mt-3 text-sm leading-relaxed text-muted">
            Ringkasan dokumentasi forum musyawarah cabang yang menetapkan program kaderisasi dan arah kajian tahun berikutnya.
        </p>
        <a href="{{ route('berita') }}" class="mt-5 inline-block text-sm font-bold text-ink hover:text-accent">Baca warta terkait →</a>
    </div>
    <button type="button" data-modal-open="lightbox-spotlight"
        class="grid aspect-[16/9] place-items-center rounded-sm bg-ink text-xs font-bold uppercase tracking-[0.2em] text-brand lg:col-span-7"
        aria-label="Buka sorotan rakernas">
        Dokumentasi utama
    </button>

    <x-modal-lightbox id="lightbox-spotlight" title="Rakernas Cabang 2025" meta="Dokumentasi keorganisasian" />
</section>
