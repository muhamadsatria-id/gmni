@php
    $bases = [
        ['name' => 'UMMI', 'short' => 'UM', 'focus' => 'Kajian sosial & kebijakan publik', 'active' => true],
        ['name' => 'Nusa Putra', 'short' => 'NP', 'focus' => 'Kaderisasi & organisasi kampus', 'active' => false],
        ['name' => 'STIE PGRI', 'short' => 'SP', 'focus' => 'Ekonomi kerakyatan', 'active' => false],
        ['name' => 'STH Pasundan', 'short' => 'ST', 'focus' => 'Hukum & advokasi', 'active' => false],
        ['name' => 'STIKES', 'short' => 'SK', 'focus' => 'Kesehatan masyarakat', 'active' => false],
        ['name' => 'UBSI', 'short' => 'UB', 'focus' => 'Komunikasi & media', 'active' => false],
        ['name' => 'Linggabuana', 'short' => 'LB', 'focus' => 'Pendidikan & kebudayaan', 'active' => false],
        ['name' => 'Politeknik Sukabumi', 'short' => 'PS', 'focus' => 'Vokasi & teknologi', 'active' => false],
    ];
@endphp

<section class="space-y-6">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Jaringan basis</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Komisariat di Sukabumi Raya</h2>
        <p class="mt-2 max-w-2xl text-sm leading-relaxed text-muted">Delapan komisariat basis yang menjadi pondasi organisasi di wilayah cabang.</p>
    </div>
    <div class="grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ($bases as $base)
            <x-orbit-komisariat :name="$base['name']" :short="$base['short']" :focus="$base['focus']" :active="$base['active']" />
        @endforeach
    </div>
</section>
