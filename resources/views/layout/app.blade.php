<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'DPC GMNI Sukabumi Raya')</title>
    <meta name="description" content="@yield('description', 'Dewan Pimpinan Cabang Gerakan Mahasiswa Nasional Indonesia Sukabumi Raya.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="min-h-screen bg-white text-ink antialiased">
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded focus:bg-ink focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">
        Lewati ke konten
    </a>

    <x-header />

    @php
        $referencePages = [
            'anggota',
            'berita',
            'berita.detail',
            'ilmiyah',
            'ilmiyah.detail',
            'galeri',
            'kalender',
            'perpustakaan',
            'struktural',
            'tentang',
        ];
        $usesReferenceLayout = request()->routeIs(...$referencePages);
    @endphp

    <main id="main-content" @class([
        'reference-page w-full bg-surface pt-4 sm:pt-2 font-body-md text-body-md text-on-surface' => $usesReferenceLayout,
        'mx-auto w-full max-w-[1400px] space-y-16 px-4 py-10 sm:px-6 lg:px-8' => !$usesReferenceLayout,
    ])>
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')
</body>

</html>
