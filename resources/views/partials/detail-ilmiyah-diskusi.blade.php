<section class="space-y-6 border-t border-line pt-10">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Tanggapan</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Diskusi naskah</h2>
    </div>
    <form class="space-y-4 rounded-sm border border-line bg-white p-5" onsubmit="return false">
        <label class="block text-xs font-bold text-ink">Komentar
            <textarea rows="4" placeholder="Tulis tanggapan terhadap naskah…" class="mt-2 w-full resize-y rounded-sm border border-line px-3 py-2 text-sm font-normal text-ink placeholder:text-muted focus:border-accent focus:outline-none"></textarea>
        </label>
        <button type="submit" class="w-fit rounded-sm bg-ink px-4 py-2 text-xs font-bold text-white hover:bg-accent">Kirim tanggapan</button>
        <p class="text-[11px] text-muted">Formulir contoh; tidak menyimpan data.</p>
    </form>
    <x-card-komentar name="Bagas Pratama" date="14 Oktober 2025" body="Bagian tentang forum kajian kecil sangat membantu saya menyusun program basis." />
</section>
