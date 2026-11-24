<?php

test('frontend halaman statis merespons 200', function (string $uri) {
    $this->withoutVite();

    $this->get($uri)->assertOk();
})->with([
    '/',
    '/berita',
    '/berita/detail',
    '/ilmiyah',
    '/ilmiyah/detail',
    '/galeri',
    '/kalender',
    '/anggota',
    '/perpustakaan',
    '/struktural',
    '/tentang',
    '/login',
]);
