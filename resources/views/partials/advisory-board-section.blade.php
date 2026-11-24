@php
    $advisors = [
        ['name' => 'Rizky Ananda', 'role' => 'Penasihat kaderisasi', 'initials' => 'RA'],
        ['name' => 'Sinta Maharani', 'role' => 'Penasihat kajian', 'initials' => 'SM'],
        ['name' => 'Bagas Pratama', 'role' => 'Penasihat organisasi', 'initials' => 'BP'],
    ];
@endphp

<section class="rounded-sm border border-line bg-paper p-6 lg:p-8">
    <p class="text-xs font-bold uppercase tracking-[0.18em] text-accent">Dewan penasihat</p>
    <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-ink">Penasihat cabang</h2>
    <div class="mt-6 grid gap-4 sm:grid-cols-3">
        @foreach ($advisors as $advisor)
            <div class="flex items-center gap-3 rounded-sm bg-white p-4">
                <span class="grid h-10 w-10 place-items-center rounded-sm bg-ink text-[11px] font-bold text-brand">{{ $advisor['initials'] }}</span>
                <div>
                    <p class="text-sm font-bold text-ink">{{ $advisor['name'] }}</p>
                    <p class="text-[11px] text-muted">{{ $advisor['role'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
