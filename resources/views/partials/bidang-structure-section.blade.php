@php
    $divisions = [
        ['title' => 'Bidang Kaderisasi', 'body' => 'Menyelenggarakan latihan, pendampingan, dan evaluasi kader di komisariat basis.'],
        ['title' => 'Bidang Kajian', 'body' => 'Mengoordinasikan diskusi, riset, dan publikasi hasil pemikiran kader.'],
        ['title' => 'Bidang Organisasi', 'body' => 'Menjaga tata kelola, administrasi, dan hubungan antarbasis.'],
        ['title' => 'Bidang Pengabdian', 'body' => 'Menerjemahkan gagasan organisasi ke dalam kegiatan kemasyarakatan.'],
        ['title' => 'Bidang Komunikasi', 'body' => 'Mengelola kanal informasi, dokumentasi, dan siaran pers.'],
        ['title' => 'Bidang Keuangan', 'body' => 'Mengelola anggaran dan pelaporan keuangan organisasi.'],
    ];
@endphp

<section class="space-y-6">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Bidang kerja</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Pembagian tugas pengurus</h2>
    </div>
    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($divisions as $division)
            <article class="rounded-sm border border-line bg-white p-5 transition hover:border-ink/30">
                <span class="grid h-9 w-9 place-items-center rounded-sm bg-ink text-[11px] font-bold text-brand">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                <h3 class="mt-4 text-sm font-bold text-ink">{{ $division['title'] }}</h3>
                <p class="mt-2 text-xs leading-relaxed text-muted">{{ $division['body'] }}</p>
            </article>
        @endforeach
    </div>
</section>
