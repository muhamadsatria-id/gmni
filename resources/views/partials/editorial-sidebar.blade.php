<aside class="space-y-6">
    @include('partials.featured-journal-spotlight')

    <section class="rounded-sm border border-line bg-white p-5">
        <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-ink">Opini populer</h2>
        <div class="mt-3">
            <x-item-opini-populer title="Kenali demokrasi dari ruang kelas" author="Nadia Safitri" />
            <x-item-opini-populer title="Kenapa kader perlu membaca sejarah" author="Rizky Ananda" />
            <x-item-opini-populer title="Catatan dari lapangan komisariat" author="Aulia Rahman" />
        </div>
    </section>

    <section class="rounded-sm border border-line bg-ink p-5 text-white">
        <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-brand">Call for papers</h2>
        <p class="mt-3 text-xs leading-relaxed text-white/70">Naskah kuartal IV terbuka untuk kader dan mitra kajian. Format sitasi mengikuti panduan redaksi.</p>
        <a href="{{ route('ilmiyah.detail') }}" class="mt-4 inline-block rounded-sm bg-brand px-4 py-2 text-xs font-bold text-ink hover:bg-white">Lihat panduan →</a>
    </section>
</aside>
