<x-breadcrumb :items="[['label' => 'Karya Ilmiah']]" />

<section class="border-b border-line bg-paper py-12 sm:py-16">
    <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
        <div class="max-w-3xl">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Ruang kajian</p>
            <h1 class="mt-3 text-3xl font-black tracking-tight text-ink sm:text-5xl">Karya Ilmiah</h1>
            <p class="mt-4 text-sm leading-relaxed text-muted sm:text-base">
                Arsip naskah, jurnal, dan buku hasil kerja kader GMNI Sukabumi Raya. Seluruh entri bersifat contoh untuk keperluan tampilan.
            </p>
        </div>
        <a href="{{ route('ilmiyah.detail') }}" class="inline-flex w-fit rounded-sm bg-ink px-5 py-3 text-sm font-bold text-white hover:bg-accent">
            Kirim naskah →
        </a>
    </div>
</section>
