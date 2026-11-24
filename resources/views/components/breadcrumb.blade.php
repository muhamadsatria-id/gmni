@props(['items' => []])

<nav aria-label="Breadcrumb" class="mb-6">
    <ol class="flex flex-wrap items-center gap-2 text-xs text-muted">
        <li>
            <a href="{{ route('home') }}" class="font-semibold text-ink hover:text-accent">Beranda</a>
        </li>
        @foreach ($items as $item)
            <li class="flex items-center gap-2">
                <span aria-hidden="true" class="text-line">/</span>
                @if (! empty($item['url']))
                    <a href="{{ $item['url'] }}" class="font-semibold text-ink hover:text-accent">{{ $item['label'] }}</a>
                @else
                    <span aria-current="page" class="font-semibold text-accent">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
