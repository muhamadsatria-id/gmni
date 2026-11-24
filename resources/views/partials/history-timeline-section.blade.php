@php
    $phases = [
        ['phase' => 'Tahap I', 'period' => '1965', 'title' => 'Fondasi gagasan', 'body' => 'Berdirinya Gerakan Mahasiswa Nasional Indonesia sebagai wadah kader mahasiswa yang berpikir dan bergerak.'],
        ['phase' => 'Tahap II', 'period' => '1970-an', 'title' => 'Penguatan basis kampus', 'body' => 'Komisariat mulai terbentuk di perguruan tinggi sebagai unit organik kaderisasi.'],
        ['phase' => 'Tahap III', 'period' => '2000-an', 'title' => 'Kajian dan publikasi', 'body' => 'Penguatan ruang diskusi, jurnal kader, dan dokumentasi hasil pemikiran organisasi.'],
        ['phase' => 'Tahap IV', 'period' => 'Sekarang', 'title' => 'Adaptasi digital', 'body' => 'Kaderisasi menjangkau kanal digital tanpa meninggalkan kebiasaan musyawarah di basis.'],
    ];
@endphp

<section class="space-y-8">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Perjalanan</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Sejarah singkat organisasi</h2>
        <p class="mt-2 max-w-2xl text-sm text-muted">Ringkasan naratif untuk kebutuhan tampilan, bukan catatan sejarah resmi.</p>
    </div>
    <div class="grid gap-8 border-l border-line pl-6 md:grid-cols-2 md:gap-x-10">
        @foreach ($phases as $phase)
            <x-timeline-phase-card :phase="$phase['phase']" :period="$phase['period']" :title="$phase['title']" :body="$phase['body']" />
        @endforeach
    </div>
</section>
