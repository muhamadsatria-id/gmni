@php
    $catalog = [
        ['title' => 'Politik Pengetahuan di Kampus', 'author' => 'Redaksi GMNI', 'year' => '2025', 'type' => 'Buku', 'code' => 'GMN-B02'],
        ['title' => 'Catatan Kaderisasi Cabang', 'author' => 'Sekretariat DPC', 'year' => '2024', 'type' => 'Laporan', 'code' => 'GMN-L04'],
        ['title' => 'Ekonomi Kerakyatan Sukabumi', 'author' => 'Tim Kajian DPC', 'year' => '2024', 'type' => 'Buku', 'code' => 'GMN-B03'],
        ['title' => 'Jurnal Kaderisasi Edisi III', 'author' => 'Redaksi GMNI', 'year' => '2025', 'type' => 'Jurnal', 'code' => 'GMN-J03'],
    ];
@endphp

<section class="space-y-6">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Direktori koleksi</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Katalog perpustakaan</h2>
    </div>
    <div class="grid gap-4 md:grid-cols-2">
        @foreach ($catalog as $item)
            <x-book-catalog-card :title="$item['title']" :author="$item['author']" :year="$item['year']" :type="$item['type']" :code="$item['code']" />
        @endforeach
    </div>
</section>
