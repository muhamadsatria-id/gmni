@props(['name' => 'Nama Pengurus', 'role' => 'Jabatan', 'period' => '2025 – 2026', 'initials' => 'GN', 'rank' => null])

<article class="group rounded-sm border border-line bg-white p-5 text-center transition hover:border-ink/30 hover:shadow-sm">
    <div class="relative mx-auto grid h-24 w-24 place-items-center rounded-sm bg-ink text-2xl font-black text-brand">
        {{ $initials }}
        @if ($rank)
            <span class="absolute -bottom-2 rounded-sm bg-brand px-2 py-0.5 text-[10px] font-bold text-ink">{{ $rank }}</span>
        @endif
    </div>
    <h3 class="mt-5 text-sm font-bold text-ink group-hover:text-accent">{{ $name }}</h3>
    <p class="mt-1 text-xs font-semibold text-accent">{{ $role }}</p>
    <p class="mt-2 text-[11px] text-muted">{{ $period }}</p>
</article>
