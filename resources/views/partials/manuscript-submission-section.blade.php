@php
    $steps = [
        ['no' => '01', 'title' => 'Siapkan naskah', 'body' => 'Format artikel 3.000–5.000 kata dengan abstrak dan lima kata kunci.'],
        ['no' => '02', 'title' => 'Sesuaikan sitasi', 'body' => 'Gunakan format sitasi redaksi dan sertakan daftar pustaka.'],
        ['no' => '03', 'title' => 'Kirim ke sekretariat', 'body' => 'Kirim berkas melalui kanal internal organisasi (contoh tampilan).'],
        ['no' => '04', 'title' => 'Tunggu penelaahan', 'body' => 'Tim editor melakukan penelaahan dan memberi masukan perbaikan.'],
    ];
@endphp

<section class="space-y-6">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Panduan</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Pengiriman naskah</h2>
        <p class="mt-2 max-w-2xl text-sm text-muted">Alur contoh untuk mengisi ruang panduan penulisan kader.</p>
    </div>
    <ol class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ($steps as $step)
            <li class="rounded-sm border border-line bg-white p-5">
                <span class="text-xs font-black tracking-widest text-brand">{{ $step['no'] }}</span>
                <h3 class="mt-4 text-sm font-bold text-ink">{{ $step['title'] }}</h3>
                <p class="mt-2 text-xs leading-relaxed text-muted">{{ $step['body'] }}</p>
            </li>
        @endforeach
    </ol>
</section>
