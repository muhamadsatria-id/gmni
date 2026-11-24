@php
    $current = request()->route()?->getName() ?? '';
    $links = [
        ['label' => 'Beranda', 'route' => 'home'],
        ['label' => 'Anggota', 'route' => 'anggota'],
        ['label' => 'Struktural', 'route' => 'struktural'],
        ['label' => 'Perpustakaan', 'route' => 'perpustakaan'],
        ['label' => 'Kalender', 'route' => 'kalender'],
        ['label' => 'Berita', 'route' => 'berita'],
        ['label' => 'Karya Ilmiah', 'route' => 'ilmiyah'],
        ['label' => 'Galeri', 'route' => 'galeri'],
        ['label' => 'Tentang Kami', 'route' => 'tentang'],
    ];
@endphp

<div class="flex min-w-0 flex-1 items-center justify-end gap-3">
    <ul aria-label="Navigasi utama" class="mx-3 flex min-w-0 list-none flex-nowrap items-center gap-[14px] overflow-x-auto p-0">
        @foreach ($links as $link)
            @php
                $active = $current === $link['route'] || str_starts_with($current, $link['route'].'.');
            @endphp
            <li class="shrink-0">
                <a href="{{ route($link['route']) }}" @if ($active) aria-current="page" @endif
                    @class([
                        'whitespace-nowrap py-1.5 px-1 text-[13px] font-semibold no-underline transition-colors duration-200',
                        'font-bold text-accent' => $active,
                        'text-ink hover:text-muted' => ! $active,
                    ])>{{ $link['label'] }}</a>
            </li>
        @endforeach
    </ul>

    <div class="flex shrink-0 items-center gap-3">
        <a href="{{ route('login') }}"
            class="whitespace-nowrap rounded-sm bg-brand px-4 py-2 text-[13px] font-bold text-ink transition-colors hover:bg-brand-dark">
            Login
        </a>
        <button type="button" data-search-toggle data-search-fallback="{{ route('berita') }}" aria-label="Cari"
            class="flex items-center justify-center p-1.5 transition-colors hover:text-muted">
            <svg class="h-5 w-5 text-ink" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
</div>
