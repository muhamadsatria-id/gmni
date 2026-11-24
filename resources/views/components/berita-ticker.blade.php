@php
    $ticker = [
        'Rilis siaran pers hasil rakernas cabang Sukabumi Raya',
        'Pendaftaran kajian publik kuartal IV telah dibuka',
        'Serah terima jabatan pengurus komisariat basis',
    ];
@endphp

<div class="flex items-center gap-3 overflow-hidden border-b border-line bg-ink px-4 py-2 text-white sm:px-6 lg:px-8">
    <span class="shrink-0 rounded-sm bg-brand px-2 py-0.5 text-[10px] font-black uppercase tracking-wide text-ink">Info cepat</span>
    <div class="min-w-0 overflow-hidden">
        <p class="truncate text-xs text-white/80">{{ implode('  •  ', $ticker) }}</p>
    </div>
</div>
