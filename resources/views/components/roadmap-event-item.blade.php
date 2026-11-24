@props(['date' => '01/JAN', 'title' => 'Rencana program', 'detail' => 'Kegiatan kaderisasi dan kajian.', 'status' => 'Direncanakan'])

<li class="flex gap-4 border-l border-line pl-6">
    <span class="w-16 shrink-0 text-[11px] font-bold uppercase tracking-wide text-accent">{{ $date }}</span>
    <div class="pb-8">
        <div class="flex flex-wrap items-center gap-2">
            <h3 class="text-sm font-bold text-ink">{{ $title }}</h3>
            <span class="rounded-sm bg-paper px-2 py-0.5 text-[10px] font-bold text-muted">{{ $status }}</span>
        </div>
        <p class="mt-1 text-xs leading-relaxed text-muted">{{ $detail }}</p>
    </div>
</li>
