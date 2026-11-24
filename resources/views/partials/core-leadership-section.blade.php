@php
    $leaders = [
        ['name' => 'Aulia Rahman', 'role' => 'Ketua DPC', 'period' => '2025 – 2026', 'initials' => 'AR', 'rank' => 'Ketua'],
        ['name' => 'Nadia Safitri', 'role' => 'Wakil Ketua', 'period' => '2025 – 2026', 'initials' => 'NS'],
        ['name' => 'Bagas Pratama', 'role' => 'Sekretaris', 'period' => '2025 – 2026', 'initials' => 'BP'],
        ['name' => 'Sinta Maharani', 'role' => 'Bendahara', 'period' => '2025 – 2026', 'initials' => 'SM'],
    ];
@endphp

<section class="space-y-6">
    <div>
        <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Pengurus inti</p>
        <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink sm:text-3xl">Kepimpinan cabang</h2>
    </div>
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ($leaders as $leader)
            <x-leadership-card :name="$leader['name']" :role="$leader['role']" :period="$leader['period']" :initials="$leader['initials']" :rank="$leader['rank'] ?? null" />
        @endforeach
    </div>
</section>
