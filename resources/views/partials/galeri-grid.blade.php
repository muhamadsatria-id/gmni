@php
    $photos = [
        ['title' => 'Pembukaan rakernas', 'category' => 'Kegiatan', 'caption' => 'Sekretariat cabang', 'filter' => 'kegiatan'],
        ['title' => 'Diskusi komisariat UMMI', 'category' => 'Kaderisasi', 'caption' => 'Forum kajian basis', 'filter' => 'kaderisasi'],
        ['title' => 'Kunjungan lapangan', 'category' => 'Dokumentasi', 'caption' => 'Wilayah Sukabumi Raya', 'filter' => 'dokumentasi'],
        ['title' => 'Latihan kepemimpinan', 'category' => 'Kaderisasi', 'caption' => 'Angkatan muda', 'filter' => 'kaderisasi'],
        ['title' => 'Publikasi siaran pers', 'category' => 'Kegiatan', 'caption' => 'Konferensi pers', 'filter' => 'kegiatan'],
        ['title' => 'Arsip foto basis', 'category' => 'Dokumentasi', 'caption' => 'Dokumentasi internal', 'filter' => 'dokumentasi'],
    ];
@endphp

<div data-filter-scope class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
    @foreach ($photos as $index => $photo)
        <div data-filter-item data-filter="{{ $photo['filter'] }}">
            <x-card-galeri :id="$index + 1" :title="$photo['title']" :category="$photo['category']" :caption="$photo['caption']" />
        </div>
    @endforeach
</div>
