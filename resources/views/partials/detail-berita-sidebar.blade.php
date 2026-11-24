<aside class="space-y-6">
    <section class="rounded-sm border border-line bg-white p-5">
        <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-ink">Bagikan warta</h2>
        <div class="mt-4 flex flex-wrap gap-2">
            @foreach ( ['Salin tautan', 'WhatsApp', 'X'] as $channel)
                <button type="button" class="rounded-sm bg-paper px-3 py-2 text-xs font-bold text-ink hover:bg-ink hover:text-white">{{ $channel }}</button>
            @endforeach
        </div>
        <p class="mt-3 text-[11px] text-muted">Tombol bersifat tampilan; tidak membuka layanan eksternal.</p>
    </section>

    <section class="rounded-sm border border-line bg-white p-5">
        <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-ink">Siaran pers</h2>
        <div class="mt-4 space-y-3">
            <x-item-siaran-pers-pdf title="Ringkasan hasil rakernas" date="12 Okt 2025" size="1,1 MB" />
            <x-item-siaran-pers-pdf title="Rekomendasi diskusi publik" date="20 Sep 2025" size="0,9 MB" />
        </div>
    </section>
</aside>
