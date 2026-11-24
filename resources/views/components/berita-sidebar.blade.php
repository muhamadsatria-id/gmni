@php
    $popular = [
        ['title' => 'Rakernas cabang tetapkan arah kaderisasi 2026', 'category' => 'Warta'],
        ['title' => 'Siaran pers komitmen kader muda', 'category' => 'Siaran Pers'],
        ['title' => 'Menjadikan kajian sebagai praktik politik', 'category' => 'Opini'],
    ];
@endphp

<aside class="space-y-6">
    <section class="rounded-sm border border-line bg-white p-5">
        <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-ink">Warta populer</h2>
        <div class="mt-3">
            @foreach ($popular as $item)
                <x-card-rekomendasi-berita :title="$item['title']" :category="$item['category']" />
            @endforeach
        </div>
    </section>

    <section class="rounded-sm border border-line bg-white p-5">
        <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-ink">Kategori</h2>
        <div class="mt-4 flex flex-wrap gap-2">
            @foreach (['Warta', 'Siaran Pers', 'Opini'] as $category)
                <a href="{{ route('berita') }}" class="rounded-sm bg-paper px-3 py-1.5 text-xs font-bold text-ink hover:bg-ink hover:text-white">{{ $category }}</a>
            @endforeach
        </div>
    </section>

    <section class="rounded-sm border border-line bg-ink p-5 text-white">
        <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-brand">Arsip siaran pers</h2>
        <div class="mt-4 space-y-3">
            <x-item-siaran-pers-pdf title="Siaran pers hasil rakernas" date="12 Okt 2025" size="1,1 MB" />
            <x-item-siaran-pers-pdf title="Rekomendasi diskusi publik" date="20 Sep 2025" size="0,9 MB" />
        </div>
    </section>
</aside>
