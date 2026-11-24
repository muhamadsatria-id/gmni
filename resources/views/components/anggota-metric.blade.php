@php
    $metrics = [
        ['label' => 'Anggota terdaftar', 'value' => '1.240', 'note' => 'Seluruh komisariat basis', 'tone' => 'ink'],
        ['label' => 'Kader aktif', 'value' => '876', 'note' => 'Aktif dalam program kaderisasi', 'tone' => 'brand'],
        ['label' => 'Komisariat basis', 'value' => '8', 'note' => 'Perguruan tinggi mitra', 'tone' => 'accent'],
        ['label' => 'Kajian berjalan', 'value' => '24', 'note' => 'Program kajian dan diskusi', 'tone' => 'paper'],
    ];
@endphp

<section aria-labelledby="anggota-metric-heading" class="space-y-5">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Angka kaderisasi</p>
        <h2 id="anggota-metric-heading" class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">
            Kader dalam angka
        </h2>
        <p class="mt-2 max-w-2xl text-sm leading-relaxed text-muted">
            Ringkasan statis untuk keperluan tampilan. Angka berikut tidak terhubung ke database atau data keanggotaan.
        </p>
    </div>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($metrics as $metric)
            <x-card-metric-anggota :label="$metric['label']" :value="$metric['value']" :note="$metric['note']" :tone="$metric['tone']" />
        @endforeach
    </div>
</section>
