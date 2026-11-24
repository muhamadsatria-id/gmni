@props(['title' => 'Siaran pers', 'date' => 'Oktober 2025', 'size' => '1,2 MB'])

<a href="#" class="group flex items-center gap-3 rounded-sm border border-line bg-white p-3 transition hover:border-accent">
    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-accent text-[10px] font-black text-white">PDF</span>
    <span class="min-w-0 flex-1">
        <span class="block text-sm font-bold text-ink group-hover:text-accent">{{ $title }}</span>
        <span class="mt-0.5 block text-[11px] text-muted">{{ $date }} · {{ $size }}</span>
    </span>
    <span class="text-xs font-bold text-muted group-hover:text-accent">↓</span>
</a>
