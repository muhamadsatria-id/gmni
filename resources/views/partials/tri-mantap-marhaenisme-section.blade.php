@php
    $values = [
        ['title' => 'Tri Mantap', 'body' => 'Berani mengambil sikap, konsisten dalam organisasi, dan siap bertanggung jawab atas pilihan kaderisasi.'],
        ['title' => 'Marhaenisme', 'body' => 'Berpihak pada subjek rakyat kecil dan menjadikan kajian sebagai alat memahami ketimpangan.'],
        ['title' => 'Kaderisasi', 'body' => 'Proses panjang membangun kebiasaan berpikir, berkumpul, dan mengabdikan pengetahuan.'],
    ];
@endphp

<section class="space-y-6">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Nilai pokok</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Pondasi pemikiran kader</h2>
    </div>
    <div class="grid gap-4 md:grid-cols-3">
        @foreach ($values as $value)
            <article class="rounded-sm border border-line bg-white p-6">
                <span class="h-1 w-10 block bg-brand"></span>
                <h3 class="mt-5 text-lg font-bold text-ink">{{ $value['title'] }}</h3>
                <p class="mt-3 text-sm leading-relaxed text-muted">{{ $value['body'] }}</p>
            </article>
        @endforeach
    </div>
</section>
