@php
    $book = [
        'title' => 'Marhaenisme: Gagasan dan Praktik Kader Muda',
        'author' => 'Tim Kajian DPC GMNI Sukabumi Raya',
        'year' => '2025',
        'type' => 'Buku',
        'code' => 'GMN-B01',
    ];
@endphp

<section class="border-b border-line bg-paper py-12 sm:py-16">
    <div class="grid gap-8 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-5">
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Koleksi unggulan</p>
            <h2 class="mt-3 text-2xl font-black tracking-tight text-ink sm:text-4xl">{{ $book['title'] }}</h2>
            <p class="mt-3 text-sm text-muted">{{ $book['author'] }} · {{ $book['year'] }}</p>
            <p class="mt-4 max-w-xl text-sm leading-relaxed text-muted">
                Buku contoh untuk mengisi ruang koleksi. Informasi katalog tidak terhubung ke sistem perpustakaan.
            </p>
            <a href="{{ route('perpustakaan') }}" class="mt-6 inline-flex rounded-sm bg-ink px-5 py-3 text-sm font-bold text-white hover:bg-accent">Lihat katalog →</a>
        </div>
        <div class="lg:col-span-7">
            <div class="mx-auto grid aspect-[4/3] max-w-xl place-items-center rounded-sm bg-ink text-center text-white">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-brand">{{ $book['code'] }}</p>
                    <p class="mt-4 text-xl font-black sm:text-2xl">{{ $book['title'] }}</p>
                    <p class="mt-4 text-xs text-white/60">{{ $book['type'] }} · Koleksi DPC</p>
                </div>
            </div>
        </div>
    </div>
</section>
