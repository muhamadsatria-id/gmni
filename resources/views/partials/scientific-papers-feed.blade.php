@php
    $papers = [
        ['title' => 'Marhaenisme dan tantangan kaderisasi digital', 'authors' => 'Aulia Rahman, Nadia Safitri', 'category' => 'Artikel', 'year' => '2025', 'abstract' => 'Membaca ulang gagasan Marhaenisme untuk menjawab perubahan lanskap politik digital di kalangan mahasiswa.', 'filter' => 'artikel'],
        ['title' => 'Kajian publik sebagai praktik demokrasi kampus', 'authors' => 'Bagas Pratama', 'category' => 'Jurnal', 'year' => '2025', 'abstract' => 'Studi tentang peran forum kajian terbuka dalam membangun kebiasaan deliberasi di komisariat basis.', 'filter' => 'jurnal'],
        ['title' => 'Ekonomi kerakyatan di Sukabumi Raya', 'authors' => 'Tim Kajian DPC', 'category' => 'Buku', 'year' => '2024', 'abstract' => 'Catatan lapangan tentang usaha mikro dan rantai nilai lokal di wilayah Sukabumi Raya.', 'filter' => 'buku'],
        ['title' => 'Politik pengetahuan dalam gerakan mahasiswa', 'authors' => 'Sinta Maharani', 'category' => 'Artikel', 'year' => '2024', 'abstract' => 'Refleksi atas produksi pengetahuan di organisasi mahasiswa dan hubungannya dengan pengabdian publik.', 'filter' => 'artikel'],
        ['title' => 'Jurnal Kaderisasi: edisi kuartal III', 'authors' => 'Redaksi GMNI', 'category' => 'Jurnal', 'year' => '2025', 'abstract' => 'Edisi tematik tentang organisasi, kaderisasi, dan kerja kebudayaan di tingkat cabang.', 'filter' => 'jurnal'],
    ];
@endphp

<div data-filter-scope class="grid gap-4 sm:grid-cols-2">
    @foreach ($papers as $paper)
        <div data-filter-item data-filter="{{ $paper['filter'] }}" data-search-item>
            <x-card-ilmiyah :title="$paper['title']" :authors="$paper['authors']" :category="$paper['category']" :year="$paper['year']" :abstract="$paper['abstract']" />
        </div>
    @endforeach
</div>
