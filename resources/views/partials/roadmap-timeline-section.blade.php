@php
    $roadmap = [
        ['date' => '01/JAN', 'title' => 'Penyusunan program tahunan', 'detail' => 'Musyawarah pengurus cabang untuk menetapkan fokus kerja.', 'status' => 'Direncanakan'],
        ['date' => '15/MAR', 'title' => 'Kajian tematik lintas basis', 'detail' => 'Seri diskusi terbuka dengan komisariat mitra.', 'status' => 'Direncanakan'],
        ['date' => '20/JUN', 'title' => 'Latihan kepemimpinan kader', 'detail' => 'Pendampingan pengurus komisariat baru.', 'status' => 'Direncanakan'],
        ['date' => '10/SEP', 'title' => 'Publikasi jurnal kaderisasi', 'detail' => 'Edisi tematik hasil kajian cabang.', 'status' => 'Direncanakan'],
        ['date' => '05/DEC', 'title' => 'Evaluasi organisasi', 'detail' => 'Refleksi program dan penyusunan rencana berikutnya.', 'status' => 'Direncanakan'],
    ];
@endphp

<section class="space-y-6">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Arah ke depan</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Roadmap organisasi</h2>
        <p class="mt-2 max-w-2xl text-sm text-muted">Rencana contoh yang menyesuaikan pola kegiatan cabang sepanjang tahun.</p>
    </div>
    <ul>
        @foreach ($roadmap as $event)
            <x-roadmap-event-item :date="$event['date']" :title="$event['title']" :detail="$event['detail']" :status="$event['status']" />
        @endforeach
    </ul>
</section>
