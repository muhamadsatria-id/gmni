@props(['variant' => 'dark'])

@php
    $tones = [
        'dark' => [
            'wrap' => 'bg-[#0a0a0a] text-white border-neutral-800',
            'heading' => 'text-white',
            'muted' => 'text-gray-400',
            'link' => 'text-gray-400 hover:text-[#FFCC00]',
            'accent' => 'text-[#FFCC00]',
        ],
        'light' => [
            'wrap' => 'bg-paper text-ink border-line',
            'heading' => 'text-ink',
            'muted' => 'text-muted',
            'link' => 'text-muted hover:text-accent',
            'accent' => 'text-accent',
        ],
        'accent' => [
            'wrap' => 'bg-accent text-white border-white/20',
            'heading' => 'text-white',
            'muted' => 'text-white/70',
            'link' => 'text-white/70 hover:text-brand',
            'accent' => 'text-brand',
        ],
    ];
    $tone = $tones[$variant] ?? $tones['dark'];

    $portal = [
        ['label' => 'Beranda', 'route' => 'home'],
        ['label' => 'Database Anggota', 'route' => 'anggota'],
        ['label' => 'Struktural Kepengurusan', 'route' => 'struktural'],
        ['label' => 'Perpustakaan Digital', 'route' => 'perpustakaan'],
        ['label' => 'Kalender Agenda', 'route' => 'kalender'],
        ['label' => 'Siaran Pers &amp; Berita', 'route' => 'berita'],
        ['label' => 'Karya Ilmiah &amp; Jurnal', 'route' => 'ilmiyah'],
        ['label' => 'Galeri Dokumentasi', 'route' => 'galeri'],
    ];
    $bases = ['DPK GMNI UMMI', 'DPK GMNI Nusa Putra', 'DPK GMNI STIE PGRI', 'DPK GMNI STH Pasundan', 'DPK GMNI STIKES', 'DPK GMNI UBSI', 'DPK Linggabuana', 'DPK Politeknik Sukabumi'];
@endphp

<footer class="w-full pt-16 pb-12 px-8 border-t {{ $tone['wrap'] }}" data-purpose="global-footer">
    <div class="max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-12 border-b border-neutral-800">
        <div class="lg:col-span-4 space-y-4">
            <div class="flex items-center space-x-3">
                <img alt="Logo GMNI" class="h-14 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAueW3-SxZi5JWksdHeou6SYDTu1LgAGdXexWXoTPvhgpGpLK94KBt1N0czka5RUMGenD5IZxyTF-iA48DBKwxl1IS56EOH3-wHO-xP3g1lmF_iVyzoviI1rVCJtKCIwCBBMmke1ULLU68qNehWe1sPs7e4qVauqQnLa-2BfJ_sGeblUrORfY4tUhpEwoU1nj7KRqhwcEY6NMq87wc6JvXqNMaMRBIoAMMlVWkOJLYVxNnYYbnqDVA">
                <div class="flex flex-col">
                    <span class="text-[18px] font-bold tracking-tight {{ $tone['heading'] }} leading-tight">DPC GMNI</span>
                    <span class="text-[11px] font-bold {{ $tone['accent'] }} uppercase tracking-wider">Sukabumi Raya</span>
                </div>
            </div>
            <div class="inline-block px-2.5 py-1 bg-red-950/80 border border-red-700/60 rounded text-[11px] font-bold text-red-200 tracking-wide">
                Pejuang Pemikir - Pemikir Pejuang
            </div>
            <p class="{{ $tone['muted'] }} text-[13px] leading-relaxed">
                Dewan Pimpinan Cabang Gerakan Mahasiswa Nasional Indonesia (DPC GMNI) Sukabumi Raya. Wadah kaderisasi, pergerakan advokasi kerakyatan, dan kajian intelektual berasaskan Marhaenisme.
            </p>
            <div class="space-y-1.5 text-[12px] {{ $tone['muted'] }} pt-1">
                <div class="flex items-start space-x-2"><span class="{{ $tone['accent'] }}">📍</span><span>Jl. Veteran No. 19, Kota Sukabumi, Jawa Barat</span></div>
                <div class="flex items-center space-x-2"><span class="{{ $tone['accent'] }}">✉</span><a class="hover:text-[#FFCC00] transition-colors" href="mailto:kontak@dpcsukabumi.gmni.or.id">kontak@dpcsukabumi.gmni.or.id</a></div>
            </div>
        </div>

        <div class="lg:col-span-3 space-y-4">
            <h4 class="text-[15px] font-bold {{ $tone['heading'] }} tracking-wide border-b border-neutral-800 pb-2.5 flex items-center justify-between">
                <span>Navigasi Portal</span><span class="w-1.5 h-1.5 rounded-full {{ $tone['accent'] === 'text-[#FFCC00]' ? 'bg-[#FFCC00]' : 'bg-brand' }}"></span>
            </h4>
            <ul class="space-y-2 text-[13px] {{ $tone['muted'] }}">
                @foreach ($portal as $link)
                    <li><a class="hover:text-[#FFCC00] transition-colors flex items-center space-x-1.5" href="{{ route($link['route']) }}"><span class="text-[10px] text-neutral-600">›</span><span>{!! $link['label'] !!}</span></a></li>
                @endforeach
            </ul>
        </div>

        <div class="lg:col-span-3 space-y-4">
            <h4 class="text-[15px] font-bold {{ $tone['heading'] }} tracking-wide border-b border-neutral-800 pb-2.5 flex items-center justify-between">
                <span>Komisariat Basis</span><span class="w-1.5 h-1.5 rounded-full bg-red-700"></span>
            </h4>
            <ul class="space-y-2 text-[13px] {{ $tone['muted'] }}">
                @foreach ($bases as $base)
                    <li><a class="hover:text-white transition-colors flex items-center space-x-1.5" href="{{ route('tentang') }}"><span class="text-[10px] text-red-500">★</span><span>{{ $base }}</span></a></li>
                @endforeach
            </ul>
        </div>

        <div class="lg:col-span-2 space-y-4">
            <h4 class="text-[15px] font-bold {{ $tone['heading'] }} tracking-wide border-b border-neutral-800 pb-2.5 flex items-center justify-between">
                <span>Jaringan &amp; Tautan</span><span class="w-1.5 h-1.5 rounded-full {{ $tone['accent'] === 'text-[#FFCC00]' ? 'bg-[#FFCC00]' : 'bg-brand' }}"></span>
            </h4>
            <ul class="space-y-2 text-[13px] {{ $tone['muted'] }}">
                <li><a class="hover:text-[#FFCC00] transition-colors" href="#">DPP GMNI Pusat</a></li>
                <li><a class="hover:text-[#FFCC00] transition-colors" href="#">DPD GMNI Jawa Barat</a></li>
                <li><a class="hover:text-[#FFCC00] transition-colors" href="#">PA GMNI Sukabumi</a></li>
                <li><a class="hover:text-[#FFCC00] transition-colors" href="#">Advokasi Marhaen</a></li>
            </ul>
            <div class="pt-3">
                <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider block mb-2">Media Sosial</span>
                <div class="flex items-center space-x-2">
                    <a class="w-8 h-8 rounded-lg bg-neutral-900 border border-neutral-800 flex items-center justify-center text-gray-300 hover:text-[#FFCC00] hover:border-neutral-700 transition-colors" href="#" title="Instagram @gmnisukabumi"><span class="text-xs font-bold">IG</span></a>
                    <a class="w-8 h-8 rounded-lg bg-neutral-900 border border-neutral-800 flex items-center justify-center text-gray-300 hover:text-red-500 hover:border-neutral-700 transition-colors" href="#" title="YouTube"><span class="text-xs font-bold">YT</span></a>
                    <a class="w-8 h-8 rounded-lg bg-neutral-900 border border-neutral-800 flex items-center justify-center text-gray-300 hover:text-blue-400 hover:border-neutral-700 transition-colors" href="#" title="Facebook"><span class="text-xs font-bold">FB</span></a>
                    <a class="w-8 h-8 rounded-lg bg-neutral-900 border border-neutral-800 flex items-center justify-center text-gray-300 hover:text-white hover:border-neutral-700 transition-colors" href="#" title="Twitter / X"><span class="text-xs font-bold">𝕏</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-[1400px] mx-auto pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs {{ $tone['muted'] }}">
        <p>© 2025 DPC GMNI Sukabumi Raya. Seluruh Hak Cipta Dilindungi Undang-Undang.</p>
        <div class="flex items-center space-x-6">
            <a class="hover:text-[#FFCC00] transition-colors" href="#">Kebijakan Privasi</a><span class="text-neutral-700">•</span>
            <a class="hover:text-[#FFCC00] transition-colors" href="#">Syarat &amp; Ketentuan</a><span class="text-neutral-700">•</span>
            <a class="hover:text-[#FFCC00] transition-colors" href="#">Pedoman Kaderisasi</a>
        </div>
    </div>
</footer>
