@props(['name' => 'Komisariat', 'short' => 'K', 'focus' => 'Fokus kajian', 'active' => false])

<div class="flex items-center gap-3 rounded-sm border {{ $active ? 'border-accent bg-ink text-white' : 'border-line bg-white text-ink' }} p-4 transition hover:border-ink/40">
    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm {{ $active ? 'bg-brand text-ink' : 'bg-ink text-brand' }} text-sm font-black">
        {{ $short }}
    </span>
    <div class="min-w-0">
        <p class="text-sm font-bold">{{ $name }}</p>
        <p class="text-xs {{ $active ? 'text-white/60' : 'text-muted' }}">{{ $focus }}</p>
    </div>
</div>
