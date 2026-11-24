@php
    $stats = [
        ['label' => 'Dibaca', 'value' => '1.284', 'note' => 'Tampilan statis', 'tone' => 'ink'],
        ['label' => 'Diunduh', 'value' => '342', 'note' => 'Tampilan statis', 'tone' => 'brand'],
        ['label' => 'Sitasi', 'value' => '18', 'note' => 'Tampilan statis', 'tone' => 'accent'],
        ['label' => 'Halaman', 'value' => '15', 'note' => '14–28', 'tone' => 'paper'],
    ];
@endphp

<section class="space-y-5">
    <h2 class="text-xl font-extrabold tracking-tight text-ink">Statistik naskah</h2>
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ($stats as $stat)
            <x-card-metric-anggota :label="$stat['label']" :value="$stat['value']" :note="$stat['note']" :tone="$stat['tone']" />
        @endforeach
    </div>
</section>
