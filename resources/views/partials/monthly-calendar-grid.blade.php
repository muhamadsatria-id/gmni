@php
    $events = [8 => 'kajian', 12 => 'rapat', 20 => 'lapangan'];
@endphp

<div data-filter-scope class="overflow-hidden rounded-sm border border-line bg-white">
    <div class="grid grid-cols-7 border-b border-line bg-ink text-center text-[11px] font-bold uppercase tracking-wide text-white">
        @foreach (['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'] as $day)
            <div class="px-2 py-3">{{ $day }}</div>
        @endforeach
    </div>
    <div class="grid grid-cols-7">
        @foreach (range(1, 3) as $blank)
            <div class="min-h-24 border-b border-r border-line bg-surface sm:min-h-28"></div>
        @endforeach
        @foreach (range(1, 31) as $date)
            @php($event = $events[$date] ?? null)
            <div data-filter-item data-filter="{{ $event ?? 'lain' }}"
                class="min-h-24 border-b border-r border-line p-2 last:border-r-0 sm:min-h-28">
                <span class="text-xs font-bold {{ $event ? 'text-accent' : 'text-muted' }}">{{ $date }}</span>
                @if ($event)
                    <p class="mt-2 rounded-sm bg-paper px-1.5 py-1 text-[10px] font-bold uppercase text-ink">{{ $event }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
