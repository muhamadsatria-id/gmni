@php
    $pillars = [
        ['no' => '01', 'title' => 'Kajian', 'body' => 'Membaca realitas sosial dengan kerangka pemikiran yang tajam dan berpihak.', 'href' => route('ilmiyah')],
        ['no' => '02', 'title' => 'Organisasi', 'body' => 'Melatih kader dalam praktik berkumpul, berunding, dan mengambil keputusan.', 'href' => route('struktural')],
        ['no' => '03', 'title' => 'Pengabdian', 'body' => 'Menghadirkan gagasan dan aksi nyata di komisariat basis serta masyarakat.', 'href' => route('galeri')],
    ];
@endphp

<section class="space-y-6">
    <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Tiga pilar</p>
            <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Kaderisasi yang berakar</h2>
        </div>
        <a href="{{ route('tentang') }}" class="text-sm font-bold text-ink hover:text-accent">Lihat pendekatan kami →</a>
    </div>
    <div class="grid gap-4 md:grid-cols-3">
        @foreach ($pillars as $pillar)
            <a href="{{ $pillar['href'] }}" class="group rounded-sm border border-line bg-white p-6 transition hover:border-ink/30 hover:shadow-sm">
                <span class="text-xs font-black tracking-widest text-brand">{{ $pillar['no'] }}</span>
                <h3 class="mt-4 text-lg font-bold text-ink group-hover:text-accent">{{ $pillar['title'] }}</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted">{{ $pillar['body'] }}</p>
                <span class="mt-5 inline-block text-xs font-bold text-ink group-hover:text-accent">Jelajahi →</span>
            </a>
        @endforeach
    </div>
</section>
