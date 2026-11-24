@props(['title' => 'Judul karya ilmiah', 'authors' => 'Tim Peneliti GMNI', 'category' => 'Artikel', 'year' => '2025', 'abstract' => '', 'href' => null])

{{-- Alias kompatibel: implementasi kanonik ada di card-ilmiyah. --}}
<x-card-ilmiyah :title="$title" :authors="$authors" :category="$category" :year="$year" :abstract="$abstract" :href="$href" />
