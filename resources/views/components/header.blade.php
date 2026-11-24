<header class="sticky top-0 z-50 w-full border-b border-line bg-white shadow-sm">
    <nav aria-label="Main Navigation" class="flex h-16 w-full items-center px-4 sm:h-[72px] sm:px-6 lg:px-8">
        <div class="mx-auto flex w-full max-w-[1400px] items-center justify-between gap-4">
            <a href="{{ route('home') }}" class="inline-flex shrink-0 items-center gap-2.5 text-ink no-underline" aria-label="DPC GMNI Sukabumi Raya — Beranda">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRcrmBKOqQUpQiHCGlCi8eTgKjQNIOPXZt5fbeV0z7EZLyCIP7Hc_24pgQdseso6aZotENJWBd-WcNciNM5uz7W_ZqhDDhDGT_V8XTa3QOfvBdDvxCs2XPJRy3MmruJ8gxac-fjdvOwH31m_we0RnvBcUTahrT904sqZyigeCAflOolN8-J0hA0E_-a_G1BEtdzDcFFNz-NoApTeLAGFhLGvtoXKuWC5EJpjpoSCJneKlKgthWlpTI"
                    alt="Logo GMNI Sukabumi Raya" class="h-[42px] w-auto shrink-0 object-contain" loading="eager">
                <div class="inline-flex flex-col leading-none">
                    <span class="text-[24px] font-black leading-none tracking-[-0.03em]">DPC GMNI</span>
                    <span class="mt-1 flex w-full justify-between text-[8.5px] font-bold uppercase leading-none text-muted">
                        @foreach (str_split('SUKABUMI RAYA') as $letter)
                            <span>@if ($letter === ' ')&nbsp;@else{{ $letter }}@endif</span>
                        @endforeach
                    </span>
                </div>
            </a>

            <x-navbar />
        </div>
    </nav>
</header>
