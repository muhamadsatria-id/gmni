@props(['day' => '12', 'month' => 'OKT', 'title' => 'Agenda keorganisasian', 'time' => '09.00 WIB', 'location' => 'Sekretariat DPC', 'status' => 'Akan datang'])

<article class="flex gap-4 rounded-sm border border-line bg-white p-4 transition hover:border-ink/30">
    <div class="grid h-14 w-14 shrink-0 place-items-center rounded-sm bg-ink text-center text-white">
        <span class="text-lg font-black leading-none">{{ $day }}</span>
        <span class="mt-1 text-[9px] font-bold tracking-widest text-brand">{{ $month }}</span>
    </div>
    <div class="min-w-0 flex-1">
        <div class="flex flex-wrap items-center gap-2">
            <span class="rounded-sm bg-paper px-2 py-0.5 text-[10px] font-bold uppercase tracking-wide text-muted">{{ $status }}</span>
            <span class="text-[11px] font-semibold text-muted">{{ $time }}</span>
        </div>
        <h3 class="mt-2 text-sm font-bold text-ink">{{ $title }}</h3>
        <p class="mt-1 text-xs text-muted">{{ $location }}</p>
    </div>
</article>
