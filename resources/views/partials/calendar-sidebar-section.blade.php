@php
    $agenda = [
        ['day' => '08', 'month' => 'OKT', 'title' => 'Kajian publik: politik pengetahuan', 'time' => '19.00 WIB', 'location' => 'UMMI', 'status' => 'Terbuka'],
        ['day' => '12', 'month' => 'OKT', 'title' => 'Rapat koordinasi pengurus cabang', 'time' => '09.00 WIB', 'location' => 'Sekretariat DPC', 'status' => 'Internal'],
        ['day' => '20', 'month' => 'OKT', 'title' => 'Kunjungan lapangan komisariat', 'time' => '08.30 WIB', 'location' => 'Sukabumi Raya', 'status' => 'Lapangan'],
    ];
@endphp

<section class="space-y-4">
    <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-ink">Agenda mendatang</h2>
    @foreach ($agenda as $item)
        <x-card-agenda :day="$item['day']" :month="$item['month']" :title="$item['title']" :time="$item['time']" :location="$item['location']" :status="$item['status']" />
    @endforeach
    <div class="rounded-sm border border-line bg-white p-4">
        <h3 class="text-xs font-bold uppercase tracking-wide text-ink">Legenda</h3>
        <ul class="mt-3 space-y-2 text-xs text-muted">
            <li><span class="mr-2 inline-block h-2 w-2 bg-accent"></span>Kajian terbuka</li>
            <li><span class="mr-2 inline-block h-2 w-2 bg-brand"></span>Rapat internal</li>
            <li><span class="mr-2 inline-block h-2 w-2 bg-ink"></span>Kegiatan lapangan</li>
        </ul>
    </div>
</section>
