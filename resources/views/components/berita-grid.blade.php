@php
    $news = [
        ['title' => 'Rakernas cabang tetapkan arah kaderisasi 2026', 'excerpt' => 'Rapat kerja nasional menghasilkan sepuluh program prioritas untuk penguatan basis kader di tingkat komisariat.', 'category' => 'Warta', 'date' => '12 Okt 2025', 'filter' => 'warta'],
        ['title' => 'Siaran pers: komitmen kader muda untuk Sukabumi Raya', 'excerpt' => 'DPC GMNI menyampaikan sikap dan rekomendasi hasil kajian publik terhadap isu strategis daerah.', 'category' => 'Siaran Pers', 'date' => '08 Okt 2025', 'filter' => 'siaran'],
        ['title' => 'Menjadikan kajian sebagai praktik politik yang jujur', 'excerpt' => 'Catatan reflektif seorang kader tentang hubungan antara ilmu, organisasi, dan pengabdian publik.', 'category' => 'Opini', 'date' => '02 Okt 2025', 'filter' => 'opini'],
        ['title' => 'Serah terima jabatan pengurus komisariat UMMI', 'excerpt' => 'Prosesi kaderisasi berlangsung tertutup dan dihadiri perwakilan setiap basis.', 'category' => 'Warta', 'date' => '28 Sep 2025', 'filter' => 'warta'],
        ['title' => 'Siaran pers hasil diskusi publik kuartal III', 'excerpt' => 'Ringkasan pokok pikiran yang disampaikan kepada pemangku kepentingan di wilayah Sukabumi Raya.', 'category' => 'Siaran Pers', 'date' => '20 Sep 2025', 'filter' => 'siaran'],
        ['title' => 'Membaca ulang Marhaenisme untuk konteks hari ini', 'excerpt' => 'Sebuah pembacaan ulang terhadap gagasan pokok dan relevansinya bagi kader muda.', 'category' => 'Opini', 'date' => '15 Sep 2025', 'filter' => 'opini'],
    ];
@endphp

<div data-filter-scope class="grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
    @foreach ($news as $item)
        <div data-filter-item data-filter="{{ $item['filter'] }}" data-search-item>
            <x-card-berita :title="$item['title']" :excerpt="$item['excerpt']" :category="$item['category']" :date="$item['date']" />
        </div>
    @endforeach
</div>
