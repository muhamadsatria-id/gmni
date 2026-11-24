@props(['label' => 'Total anggota', 'value' => '1.240', 'note' => 'Data statis untuk tampilan', 'tone' => 'ink'])

@php
    $tones = [
        'ink' => 'bg-ink text-white',
        'brand' => 'bg-brand text-ink',
        'accent' => 'bg-accent text-white',
        'paper' => 'bg-paper text-ink',
    ];
@endphp

<div class="rounded-sm border border-line p-5 {{ $tones[$tone] ?? $tones['ink'] }}">
    <p class="text-[11px] font-bold uppercase tracking-[0.16em] opacity-70">{{ $label }}</p>
    <p class="mt-3 text-3xl font-black tracking-tight">{{ $value }}</p>
    <p class="mt-2 text-xs opacity-70">{{ $note }}</p>
</div>
