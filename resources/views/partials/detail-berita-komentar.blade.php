<section class="space-y-6 border-t border-line pt-10">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Diskusi</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Komentar pembaca</h2>
    </div>

    <form class="grid gap-4 rounded-sm border border-line bg-white p-5" onsubmit="return false">
        <div class="grid gap-4 sm:grid-cols-2">
            <label class="block text-xs font-bold text-ink">Nama
                <input type="text" placeholder="Nama Anda" class="mt-2 w-full rounded-sm border border-line px-3 py-2 text-sm font-normal text-ink placeholder:text-muted focus:border-accent focus:outline-none">
            </label>
            <label class="block text-xs font-bold text-ink">Email
                <input type="email" placeholder="nama@contoh.id" class="mt-2 w-full rounded-sm border border-line px-3 py-2 text-sm font-normal text-ink placeholder:text-muted focus:border-accent focus:outline-none">
            </label>
        </div>
        <label class="block text-xs font-bold text-ink">Komentar
            <textarea rows="4" placeholder="Tulis tanggapan Anda…" class="mt-2 w-full resize-y rounded-sm border border-line px-3 py-2 text-sm font-normal text-ink placeholder:text-muted focus:border-accent focus:outline-none"></textarea>
        </label>
        <button type="submit" class="w-fit rounded-sm bg-ink px-4 py-2 text-xs font-bold text-white hover:bg-accent">Kirim komentar</button>
        <p class="text-[11px] text-muted">Formulir hanya contoh tampilan dan tidak mengirim data.</p>
    </form>

    <div class="space-y-4">
        <x-card-komentar name="Aulia Rahman" date="13 Oktober 2025" body="Program kajian lintas komisariat terdengar sangat relevan untuk memperkuat basis." />
        <x-card-komentar name="Nadia Safitri" date="12 Oktober 2025" body="Terima kasih atas ringkasan hasil rakernas. Menanti detail jadwal pelaksanaannya." />
    </div>
</section>
