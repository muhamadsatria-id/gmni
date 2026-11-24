@verbatim
<div class="flex flex-col w-full">
<!-- Top Operational Banner & Marquee Status -->
<section class="w-full bg-surface-container-low px-margin-mobile lg:px-margin py-space-md">
<div class="max-w-[1440px] mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm">
<span class="inline-flex items-center justify-center w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Kalender Perjuangan &amp; Agitasi</span>
<span class="text-on-surface-variant font-body-sm text-body-sm hidden sm:inline">• Periode Organisasi 2024–2026</span>
</div>
<div class="flex flex-wrap items-center gap-space-sm font-label-sm text-label-sm">
<span class="px-space-sm py-1 bg-surface-container-highest rounded-full text-on-surface-variant font-medium">Bulan Aktif: <strong class="text-on-surface font-bold">Oktober - Desember 2024</strong></span>
<span class="px-space-sm py-1 bg-surface-container text-primary font-semibold rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">sync</span> Sinkronisasi Komisariat Aktif
        </span>
</div>
</div>
</section>
<!-- Editorial Page Intro / Strategic Headline -->
<section class="w-full bg-surface px-margin-mobile lg:px-margin pt-space-xl pb-space-lg">
<div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-gutter items-end">
<div class="lg:col-span-8 flex flex-col gap-space-sm">
<div class="flex items-center gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Rencana Operasional Cabang</span>
<span class="h-1 w-6 bg-primary rounded-full inline-block"></span>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight font-extrabold leading-none">
          Kalender &amp; Timeline Perjuangan
        </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-xs">
          Konsolidasi terjadwal kaderisasi marhaenis, agenda advokasi massa tertindas, dialektika ideologi, serta peringatan historis revolusioner di wilayah hukum DPC GMNI Sukabumi Raya.
        </p>
</div>
<!-- Quick Action / Calendar Sync -->
<div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col items-start lg:items-end justify-end gap-space-sm">
<div class="flex items-center gap-space-xs bg-surface-container-high px-space-md py-space-sm rounded-lg shadow-sm">
<span class="material-symbols-outlined text-primary text-[20px]">calendar_add_on</span>
<span class="font-label-md text-label-md text-on-surface font-semibold">Sinkronisasi iCal / Google Calendar</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Update terakhir: 24 Oktober 2024, 08:30 WIB</span>
</div>
</div>
</section>
<!-- Filter & Categorization Bar -->
<section class="w-full bg-surface px-margin-mobile lg:px-margin pb-space-lg">
<div class="max-w-[1440px] mx-auto">
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
<!-- Main Filter Chips -->
<div class="flex flex-wrap items-center gap-space-xs" id="filter-container">
<button class="event-filter-btn px-space-md py-2 rounded-lg font-label-md text-label-md font-bold transition-all bg-primary text-on-primary shadow-sm" data-filter="all" type="button">
            Semua Kategori (18)
          </button>
<button class="event-filter-btn px-space-md py-2 rounded-lg font-label-md text-label-md font-semibold transition-all bg-surface-container text-on-surface-variant hover:text-on-surface" data-filter="kaderisasi" type="button">
<span class="inline-block w-2 h-2 rounded-full bg-primary mr-1.5"></span>Kaderisasi (PPAB/KTD)
          </button>
<button class="event-filter-btn px-space-md py-2 rounded-lg font-label-md text-label-md font-semibold transition-all bg-surface-container text-on-surface-variant hover:text-on-surface" data-filter="advokasi" type="button">
<span class="inline-block w-2 h-2 rounded-full bg-error mr-1.5"></span>Aksi &amp; Advokasi Kerakyatan
          </button>
<button class="event-filter-btn px-space-md py-2 rounded-lg font-label-md text-label-md font-semibold transition-all bg-surface-container text-on-surface-variant hover:text-on-surface" data-filter="diskusi" type="button">
<span class="inline-block w-2 h-2 rounded-full bg-tertiary-container mr-1.5"></span>Diskusi Ideologi
          </button>
<button class="event-filter-btn px-space-md py-2 rounded-lg font-label-md text-label-md font-semibold transition-all bg-surface-container text-on-surface-variant hover:text-on-surface" data-filter="rapat" type="button">
<span class="inline-block w-2 h-2 rounded-full bg-inverse-surface mr-1.5"></span>Rapat Koordinasi &amp; Pleno
          </button>
<button class="event-filter-btn px-space-md py-2 rounded-lg font-label-md text-label-md font-semibold transition-all bg-surface-container text-on-surface-variant hover:text-on-surface" data-filter="phbn" type="button">
<span class="inline-block w-2 h-2 rounded-full bg-secondary mr-1.5"></span>PHBN &amp; Peringatan Historis
          </button>
</div>
<!-- Month Navigation Switcher -->
<div class="flex items-center gap-space-xs self-end lg:self-auto bg-surface-container rounded-lg p-1">
<button class="p-1.5 rounded-md hover:bg-surface-container-highest text-on-surface-variant transition-colors" id="prev-month-btn" title="Bulan Sebelumnya" type="button">
<span class="material-symbols-outlined text-[20px] block">chevron_left</span>
</button>
<span class="font-label-md text-label-md font-bold px-space-md text-on-surface" id="current-month-display">November 2024</span>
<button class="p-1.5 rounded-md hover:bg-surface-container-highest text-on-surface-variant transition-colors" id="next-month-btn" title="Bulan Berikutnya" type="button">
<span class="material-symbols-outlined text-[20px] block">chevron_right</span>
</button>
</div>
</div>
</div>
</section>
<!-- Interactive Monthly Calendar & Sidebar Overview -->
<section class="w-full bg-surface px-margin-mobile lg:px-margin pb-space-xl">
<div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- 8-Col: Dynamic Calendar Grid -->
<div class="lg:col-span-8 flex flex-col gap-space-md">
<div class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm">
<!-- Month Banner Header -->
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between pb-space-md gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Matriks Agitasi Terjadwal</span>
<h2 class="font-headline-md text-headline-md font-bold text-on-surface">Kalender Agenda November 2024</h2>
</div>
<div class="flex items-center gap-space-sm font-label-sm text-label-sm text-on-surface-variant">
<span class="flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-full bg-primary inline-block"></span> Kaderisasi</span>
<span class="flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-full bg-error inline-block"></span> Advokasi</span>
<span class="flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-full bg-tertiary-container inline-block"></span> Ideologi</span>
</div>
</div>
<!-- Calendar Table Structure -->
<div class="w-full overflow-x-auto">
<div class="min-w-[680px]">
<!-- Day Headers -->
<div class="grid grid-cols-7 gap-1 pb-space-xs text-center font-label-md text-label-md font-bold text-on-surface-variant">
<div class="py-2 text-error">Minggu</div>
<div class="py-2">Senin</div>
<div class="py-2">Selasa</div>
<div class="py-2">Rabu</div>
<div class="py-2">Kamis</div>
<div class="py-2">Jumat</div>
<div class="py-2">Sabtu</div>
</div>
<!-- Calendar Days Grid (November 2024 starts on Friday) -->
<div class="grid grid-cols-7 gap-1.5 pt-1">
<!-- Inactive days October -->
<div class="min-h-[105px] p-2 bg-surface-container-low/40 rounded-lg opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant font-bold">27</span>
</div>
<div class="min-h-[105px] p-2 bg-surface-container-low/40 rounded-lg opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant font-bold">28</span>
</div>
<div class="min-h-[105px] p-2 bg-surface-container-low/40 rounded-lg opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant font-bold">29</span>
</div>
<div class="min-h-[105px] p-2 bg-surface-container-low/40 rounded-lg opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant font-bold">30</span>
</div>
<div class="min-h-[105px] p-2 bg-surface-container-low/40 rounded-lg opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant font-bold">31</span>
</div>
<!-- 1 Nov (Fri) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">1</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-inverse-surface text-surface text-[10px] rounded font-semibold truncate leading-tight">
                      Rapat Pengurus Harian
                    </span>
</div>
</div>
<!-- 2 Nov (Sat) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">2</span>
<div class="mt-1"></div>
</div>
<!-- 3 Nov (Sun) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-error font-bold">3</span>
<div class="mt-1"></div>
</div>
<!-- 4 Nov (Mon) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">4</span>
<div class="mt-1"></div>
</div>
<!-- 5 Nov (Tue) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">5</span>
<div class="mt-1"></div>
</div>
<!-- 6 Nov (Wed) - Diskusi Reboan -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">6</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-tertiary-container text-on-tertiary-container text-[10px] rounded font-bold truncate leading-tight cursor-pointer" title="Diskusi Reboan Marhaenis: Agraria &amp; Kedaulatan Pangan">
                      Reboan Ideologi #28
                    </span>
</div>
</div>
<!-- 7 Nov (Thu) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">7</span>
<div class="mt-1"></div>
</div>
<!-- 8 Nov (Fri) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">8</span>
<div class="mt-1"></div>
</div>
<!-- 9 Nov (Sat) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">9</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-secondary text-on-secondary text-[10px] rounded font-semibold truncate leading-tight">
                      Malam Renungan PHBN
                    </span>
</div>
</div>
<!-- 10 Nov (Sun) - Hari Pahlawan -->
<div class="min-h-[105px] p-2 bg-surface-container-high rounded-lg hover:bg-surface-container-highest transition-colors flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-error font-extrabold">10</span>
<span class="material-symbols-outlined text-secondary text-[14px]">flag</span>
</div>
<div class="mt-1 flex flex-col gap-0.5">
<span class="block px-1.5 py-0.5 bg-secondary text-on-secondary text-[10px] rounded font-bold truncate leading-tight">
                      Aksi Hari Pahlawan
                    </span>
<span class="block px-1.5 py-0.5 bg-primary text-on-primary text-[10px] rounded font-semibold truncate leading-tight">
                      Tabur Bunga TMP
                    </span>
</div>
</div>
<!-- 11 Nov (Mon) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">11</span>
<div class="mt-1"></div>
</div>
<!-- 12 Nov (Tue) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">12</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-error text-on-error text-[10px] rounded font-bold truncate leading-tight">
                      Advokasi Agraria Jampang
                    </span>
</div>
</div>
<!-- 13 Nov (Wed) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">13</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-tertiary-container text-on-tertiary-container text-[10px] rounded font-bold truncate leading-tight">
                      Reboan Ideologi #29
                    </span>
</div>
</div>
<!-- 14 Nov (Thu) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">14</span>
<div class="mt-1"></div>
</div>
<!-- 15 Nov (Fri) - Focus Date -->
<div class="min-h-[105px] p-2 bg-surface-container-lowest rounded-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">15</span>
<span class="font-label-sm text-[10px] text-primary uppercase font-bold">Hari Ini</span>
</div>
<div class="mt-1 flex flex-col gap-0.5">
<span class="block px-1.5 py-0.5 bg-primary-container text-on-primary-container text-[10px] rounded font-extrabold truncate leading-tight">
                      Pembukaan PPAB UMMI
                    </span>
</div>
</div>
<!-- 16 Nov (Sat) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">16</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-primary text-on-primary text-[10px] rounded font-semibold truncate leading-tight">
                      PPAB Serentak Hari ke-2
                    </span>
</div>
</div>
<!-- 17 Nov (Sun) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-error font-bold">17</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-primary text-on-primary text-[10px] rounded font-semibold truncate leading-tight">
                      Pembaiatan Kader Baru
                    </span>
</div>
</div>
<!-- 18 Nov (Mon) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">18</span>
<div class="mt-1"></div>
</div>
<!-- 19 Nov (Tue) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">19</span>
<div class="mt-1"></div>
</div>
<!-- 20 Nov (Wed) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">20</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-tertiary-container text-on-tertiary-container text-[10px] rounded font-bold truncate leading-tight">
                      Reboan Ideologi #30
                    </span>
</div>
</div>
<!-- 21 Nov (Thu) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">21</span>
<div class="mt-1"></div>
</div>
<!-- 22 Nov (Fri) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">22</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-surface-container-highest text-on-surface text-[10px] rounded font-semibold truncate leading-tight">
                      Workshop Media &amp; Agitprop
                    </span>
</div>
</div>
<!-- 23 Nov (Sat) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">23</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-inverse-surface text-on-secondary text-[10px] rounded font-semibold truncate leading-tight">
                      Rapat Pleno DPC
                    </span>
</div>
</div>
<!-- 24 Nov (Sun) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-error font-bold">24</span>
<div class="mt-1"></div>
</div>
<!-- 25 Nov (Mon) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">25</span>
<div class="mt-1"></div>
</div>
<!-- 26 Nov (Tue) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">26</span>
<div class="mt-1"></div>
</div>
<!-- 27 Nov (Wed) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">27</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-tertiary-container text-on-tertiary-container text-[10px] rounded font-bold truncate leading-tight">
                      Kajian Agraria Buruh
                    </span>
</div>
</div>
<!-- 28 Nov (Thu) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">28</span>
<div class="mt-1"></div>
</div>
<!-- 29 Nov (Fri) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">29</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-primary text-on-primary text-[10px] rounded font-semibold truncate leading-tight">
                      Konsolidasi KTD Zona 1
                    </span>
</div>
</div>
<!-- 30 Nov (Sat) -->
<div class="min-h-[105px] p-2 bg-surface-container-low rounded-lg hover:bg-surface-container transition-colors flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-bold">30</span>
<div class="mt-1">
<span class="block px-1.5 py-0.5 bg-primary-container text-on-primary-container text-[10px] rounded font-bold truncate leading-tight">
                      Pentas Budaya Marhaen
                    </span>
</div>
</div>
</div>
</div>
</div>
<!-- Bottom Notice -->
<div class="mt-space-md p-space-sm bg-surface-container-low rounded-lg flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-[18px] text-primary">info</span>
<span>Jadwal sewaktu-waktu dapat disesuaikan dengan instruksi darurat DPP atau dinamika massa aksi lapangan.</span>
</div>
<button class="font-label-sm text-label-sm text-primary font-bold hover:underline">Unduh PDF Kalender</button>
</div>
</div>
</div>
<!-- 4-Col: Focused Event Card & Commissariat Highlights -->
<div class="lg:col-span-4 flex flex-col gap-space-md">
<!-- Live Selected Spotlight Card -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<span class="px-space-sm py-1 rounded-full font-label-sm text-label-sm uppercase font-bold bg-error-container text-on-error-container">
              Prioritas Cabang
            </span>
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">schedule</span> 15-17 Nov 2024
            </span>
</div>
<div>
<span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">Kaderisasi Tingkat Dasar</span>
<h3 class="font-headline-md text-headline-md font-bold text-on-surface mt-1">
              PPAB Serentak Komisariat Se-Kota Sukabumi
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs leading-relaxed">
              Pekan Penerimaan Anggota Baru (PPAB) terpusat untuk Komisariat UMMI, Nusa Putra, dan STIKES Sukabumi. Membangun pondasi ideologi kerakyatan generasi muda Sukabumi.
            </p>
</div>
<!-- Event Metas -->
<div class="flex flex-col gap-space-xs py-space-sm bg-surface-container-low rounded-lg px-space-md">
<div class="flex items-center gap-space-sm font-body-sm text-body-sm">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span class="text-on-surface font-medium">Aula Wisma Korpri Sukabumi</span>
</div>
<div class="flex items-center gap-space-sm font-body-sm text-body-sm">
<span class="material-symbols-outlined text-primary text-[18px]">group</span>
<span class="text-on-surface font-medium">Target: 150 Kader Baru</span>
</div>
<div class="flex items-center gap-space-sm font-body-sm text-body-sm">
<span class="material-symbols-outlined text-primary text-[18px]">person</span>
<span class="text-on-surface font-medium">Kordinator: Bung Aris Munandar (Wakabid Kaderisasi)</span>
</div>
</div>
<!-- Action CTA -->
<div class="flex items-center gap-space-sm pt-space-xs">
<button class="w-full bg-primary hover:bg-secondary text-on-primary font-label-md text-label-md font-bold py-2.5 rounded-lg shadow-sm transition-all flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-[18px]">description</span> Unduh TOR PPAB
            </button>
<button class="bg-surface-container hover:bg-surface-container-high text-on-surface p-2.5 rounded-lg transition-all" title="Bagikan Agenda" type="button">
<span class="material-symbols-outlined text-[20px] block">share</span>
</button>
</div>
</div>
<!-- Commissariat Submission Callout -->
<div class="bg-surface-container-high p-space-lg rounded-xl shadow-sm flex flex-col gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-primary text-on-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">edit_calendar</span>
</div>
<h4 class="font-headline-sm text-headline-sm font-bold text-on-surface">Ajukan Agenda Komisariat</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
            Pengurus DPK diwajibkan mendaftarkan jadwal rapat, kaderisasi mikro, dan audiensi kampus minimal H-7 pelaksanaan untuk sinkronisasi pengawalan cabang.
          </p>
<button class="mt-space-xs bg-inverse-surface hover:bg-on-surface text-surface font-label-md text-label-md font-bold py-2 px-space-md rounded-lg self-start transition-all" type="button">
            Formulir Pengajuan DPK →
          </button>
</div>
</div>
</div>
</section>
<!-- Detailed Timeline Section: Roadmap Triwulan IV & Agenda Terdekat -->
<section class="w-full bg-surface-container-low px-margin-mobile lg:px-margin py-space-xl">
<div class="max-w-[1440px] mx-auto flex flex-col gap-space-xl">
<!-- Section Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Rangkaian Operasional Lapangan</span>
<h2 class="font-headline-xl text-headline-xl font-extrabold text-on-surface mt-1">Agenda Terdekat &amp; Roadmap Triwulan IV</h2>
</div>
<div class="flex items-center gap-space-sm">
<span class="font-label-md text-label-md text-on-surface-variant">Tampilan:</span>
<span class="font-label-md text-label-md font-bold text-primary bg-surface px-space-md py-1.5 rounded-lg shadow-sm">Kronologis Rinci</span>
</div>
</div>
<!-- Timeline Vertical Container -->
<div class="relative flex flex-col gap-space-lg">
<!-- Center accent line for desktop -->
<div class="hidden lg:block absolute left-8 top-4 bottom-4 w-0.5 bg-outline-variant/60"></div>
<!-- Timeline Item 1: PPAB Serentak -->
<div class="relative flex flex-col lg:flex-row items-start gap-space-md group">
<div class="lg:w-16 flex lg:flex-col items-center justify-center shrink-0">
<div class="w-12 h-12 rounded-xl bg-primary text-on-primary flex flex-col items-center justify-center shadow-md z-10">
<span class="font-headline-sm text-headline-sm font-extrabold leading-none">15</span>
<span class="font-label-sm text-[10px] uppercase font-bold tracking-tighter">NOV</span>
</div>
</div>
<div class="flex-1 bg-surface rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row justify-between gap-space-lg">
<div class="flex flex-col gap-space-xs flex-1">
<div class="flex flex-wrap items-center gap-space-xs">
<span class="px-space-sm py-0.5 rounded-full bg-primary/10 text-primary font-label-sm text-label-sm font-bold uppercase">Kaderisasi Pokok</span>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-medium">Komisariat Gabungan</span>
<span class="text-on-surface-variant text-[12px] font-label-md">• Waktu: 08.00 WIB - Selesai</span>
</div>
<h3 class="font-headline-md text-headline-md font-bold text-on-surface mt-1">
                Pekan Penerimaan Anggota Baru (PPAB) Serentak Zona Perkotaan
              </h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl leading-relaxed">
                Pintu gerbang penempaan watak dan intelektual mahasiswa Sukabumi dengan silabus resmi Marhaenisme, Nasionalisme Kritis, Gerakan Pemuda, dan Analisis Sosial Daerah. Diikuti ratusan mahasiswa terpilih.
              </p>
<!-- Speaker & Venue Badges -->
<div class="flex flex-wrap gap-space-md mt-space-sm pt-space-xs">
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<strong>Aula Wisma Korpri Cikole, Kota Sukabumi</strong>
</div>
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">contact_phone</span>
<span>Panitia: Sarinah Sekar (+62 857-2211-9081)</span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-space-xs shrink-0 lg:w-56">
<button class="bg-primary hover:bg-secondary text-on-primary font-label-md text-label-md font-bold py-2.5 px-space-md rounded-lg shadow-sm transition-all text-center" type="button">
                Konfirmasi Delegasi
              </button>
<button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md font-semibold py-2.5 px-space-md rounded-lg transition-all text-center flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-[16px]">download</span> Unduh Panduan TOR
              </button>
</div>
</div>
</div>
<!-- Timeline Item 2: Advokasi Agraria Sukabumi Selatan -->
<div class="relative flex flex-col lg:flex-row items-start gap-space-md group">
<div class="lg:w-16 flex lg:flex-col items-center justify-center shrink-0">
<div class="w-12 h-12 rounded-xl bg-error text-on-error flex flex-col items-center justify-center shadow-md z-10">
<span class="font-headline-sm text-headline-sm font-extrabold leading-none">21</span>
<span class="font-label-sm text-[10px] uppercase font-bold tracking-tighter">NOV</span>
</div>
</div>
<div class="flex-1 bg-surface rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row justify-between gap-space-lg">
<div class="flex flex-col gap-space-xs flex-1">
<div class="flex flex-wrap items-center gap-space-xs">
<span class="px-space-sm py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-bold uppercase">Advokasi Kerakyatan</span>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-medium">Biro Hukum &amp; HAM Cabang</span>
<span class="text-on-surface-variant text-[12px] font-label-md">• Waktu: 10.00 WIB - 16.00 WIB</span>
</div>
<h3 class="font-headline-md text-headline-md font-bold text-on-surface mt-1">
                Audiensi &amp; Posko Pengaduan Sengketa Lahan Petani Penggarap Jampang
              </h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl leading-relaxed">
                Pendampingan hukum struktural dan investigasi lapangan bersama serikat tani lokal mengenai tumpang tindih Hak Guna Usaha (HGU) perkebunan dan ruang hidup masyarakat adat pesisir selatan Sukabumi.
              </p>
<div class="flex flex-wrap gap-space-md mt-space-sm pt-space-xs">
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-error text-[18px]">location_on</span>
<strong>Balai Desa Cikangkung, Jampang Kulon, Kab. Sukabumi</strong>
</div>
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-error text-[18px]">gavel</span>
<span>Tim Advokasi: Bung Fajar Ramadhan, S.H.</span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-space-xs shrink-0 lg:w-56">
<button class="bg-inverse-surface hover:bg-on-surface text-surface font-label-md text-label-md font-bold py-2.5 px-space-md rounded-lg shadow-sm transition-all text-center" type="button">
                Daftar Relawan Advokasi
              </button>
<button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md font-semibold py-2.5 px-space-md rounded-lg transition-all text-center flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-[16px]">feed</span> Berkas Kronologi
              </button>
</div>
</div>
</div>
<!-- Timeline Item 3: Diskusi Reboan Marhaenis -->
<div class="relative flex flex-col lg:flex-row items-start gap-space-md group">
<div class="lg:w-16 flex lg:flex-col items-center justify-center shrink-0">
<div class="w-12 h-12 rounded-xl bg-tertiary-container text-on-tertiary-container flex flex-col items-center justify-center shadow-md z-10">
<span class="font-headline-sm text-headline-sm font-extrabold leading-none">27</span>
<span class="font-label-sm text-[10px] uppercase font-bold tracking-tighter">NOV</span>
</div>
</div>
<div class="flex-1 bg-surface rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row justify-between gap-space-lg">
<div class="flex flex-col gap-space-xs flex-1">
<div class="flex flex-wrap items-center gap-space-xs">
<span class="px-space-sm py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold uppercase">Diskusi Terbuka</span>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-medium">Bidang Ideologi &amp; Politik</span>
<span class="text-on-surface-variant text-[12px] font-label-md">• Waktu: 19.30 WIB - 22.30 WIB</span>
</div>
<h3 class="font-headline-md text-headline-md font-bold text-on-surface mt-1">
                Reboan Marhaenis: "Sosio-Nasionalisme Menghadapi Neokolonialisme Digital"
              </h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl leading-relaxed">
                Kajian rutin dwimingguan membedah relevansi pemikiran Bung Karno dalam membaca krisis kedaulatan data, hegemoni platform multinasional, serta kerentanan prekaritas buruh kreatif di Jawa Barat.
              </p>
<div class="flex flex-wrap gap-space-md mt-space-sm pt-space-xs">
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-tertiary text-[18px]">location_on</span>
<strong>Wisma Perjuangan DPC GMNI Sukabumi Raya (Jl. Veteran 45)</strong>
</div>
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-tertiary text-[18px]">podium</span>
<span>Pemantik: Alumni GMNI &amp; Akademisi Sosiologi Politik</span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-space-xs shrink-0 lg:w-56">
<button class="bg-primary hover:bg-secondary text-on-primary font-label-md text-label-md font-bold py-2.5 px-space-md rounded-lg shadow-sm transition-all text-center" type="button">
                Reservasi Kursi Terbatas
              </button>
<button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md font-semibold py-2.5 px-space-md rounded-lg transition-all text-center flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-[16px]">menu_book</span> Bahan Bacaan PDF
              </button>
</div>
</div>
</div>
<!-- Timeline Item 4: Rapat Pleno DPC & KTD Zona 1 -->
<div class="relative flex flex-col lg:flex-row items-start gap-space-md group">
<div class="lg:w-16 flex lg:flex-col items-center justify-center shrink-0">
<div class="w-12 h-12 rounded-xl bg-inverse-surface text-surface flex flex-col items-center justify-center shadow-md z-10">
<span class="font-headline-sm text-headline-sm font-extrabold leading-none">07</span>
<span class="font-label-sm text-[10px] uppercase font-bold tracking-tighter">DES</span>
</div>
</div>
<div class="flex-1 bg-surface rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row justify-between gap-space-lg">
<div class="flex flex-col gap-space-xs flex-1">
<div class="flex flex-wrap items-center gap-space-xs">
<span class="px-space-sm py-0.5 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm font-bold uppercase">Struktural Cabang</span>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-medium">Wajib Seluruh Pengurus</span>
<span class="text-on-surface-variant text-[12px] font-label-md">• Waktu: 09.00 - 18.00 WIB</span>
</div>
<h3 class="font-headline-md text-headline-md font-bold text-on-surface mt-1">
                Rapat Pleno Akhir Tahun &amp; Evaluasi Progres Kaderisasi Tingkat Dasar (KTD)
              </h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl leading-relaxed">
                Penyampaian laporan pertanggungjawaban triwulan setiap biro, penetapan kurikulum kaderisasi lanjutan, serta penetapan kepanitiaan Dies Natalis GMNI ke-71 tingkat Sukabumi Raya.
              </p>
<div class="flex flex-wrap gap-space-md mt-space-sm pt-space-xs">
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">home_pin</span>
<strong>Gedung Pusat Informasi Grafika Cisaat</strong>
</div>
<div class="flex items-center gap-space-xs font-body-sm text-body-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-[18px]">verified_user</span>
<span>Presidium Sidang: BPH DPC GMNI Sukabumi Raya</span>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row lg:flex-col justify-center gap-space-xs shrink-0 lg:w-56">
<button class="bg-primary hover:bg-secondary text-on-primary font-label-md text-label-md font-bold py-2.5 px-space-md rounded-lg shadow-sm transition-all text-center" type="button">
                Konfirmasi Kehadiran Pleno
              </button>
<button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md font-semibold py-2.5 px-space-md rounded-lg transition-all text-center flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-[16px]">draft</span> Draf Agenda Sidang
              </button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Visual Cadre Activity & Institutional Statistics -->
<section class="w-full bg-surface px-margin-mobile lg:px-margin py-space-xl">

</section>
<!-- Commissariat Fast Dialectics & Location Anchor -->
<section class="w-full bg-surface-container-low px-margin-mobile lg:px-margin py-space-xl">
<div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
<!-- Left: Location Map -->
<div class="lg:col-span-5 flex flex-col gap-space-sm">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Pusat Komando Kegiatan</span>
<h3 class="font-headline-md text-headline-md font-bold text-on-surface">Sekretariat DPC GMNI Sukabumi Raya</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
          Seluruh koordinasi teknis, pendaftaran delegasi komisariat, serta posko pengaduan advokasi terpusat di Wisma Perjuangan Cikole.
        </p>
<div class="w-full h-56 bg-cover bg-center rounded-xl shadow-sm mt-space-xs" data-alt="Stylized topographic roadmap of Cikole Sukabumi displaying municipal boundary and political headquarters location marker, minimal editorial vector map representation." data-location="Jl. Veteran No. 45, Cikole, Kota Sukabumi, Jawa Barat" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDUxScwwAwTwRD3sSJscN1WdfNFRRXo7TcyHpz9nadNinaGh8OL1VPV9YYcw6tdaa7KBGgR8NyT0k_Q5bGURlYnblmTED5BsgOdVg4XtNbp4zm72IGE7ypls7TV6n4BHE9LXv5GCPQRdqJbnsPHXbcObnhWIZMMiQhNYTI1z2NSoYIesSizQAMof2qfpVKbgbPxIJaUVaGrSFj69HdTTqGK1894ARgEn83E9ZZjJ-w')"></div>
</div>
<!-- Right: Direct Submission CTA -->
<div class="lg:col-span-7 bg-surface rounded-2xl p-space-xl shadow-sm flex flex-col gap-space-md">
<div class="flex items-center gap-space-xs text-primary font-bold font-label-sm text-label-sm uppercase tracking-wider">
<span class="material-symbols-outlined text-[18px]">broadcast_on_personal</span> Kanal Konfirmasi Cepat
        </div>
<h3 class="font-headline-lg text-headline-lg font-extrabold text-on-surface leading-tight">
          Ingin Mengundang DPC atau Mengajukan Kolaborasi Gerakan?
        </h3>
<p class="font-body-md text-body-md text-on-surface-variant">
          DPC GMNI Sukabumi Raya membuka ruang seluas-luasnya bagi serikat buruh, perhimpunan tani, ormawa kampus, dan organisasi pemuda untuk menyelaraskan agenda aksi serta kajian strategis bersama.
        </p>
<form class="flex flex-col sm:flex-row gap-space-sm pt-space-xs" onsubmit="event.preventDefault(); alert('Pesan kolaborasi agenda Anda telah terkirim ke Sekretariat DPC GMNI Sukabumi Raya. Merdeka!');">
<input class="flex-1 bg-surface-container-lowest px-space-md py-3 rounded-lg text-on-surface font-body-sm text-body-sm placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary shadow-sm" placeholder="Nama Organisasi / DPK Kampus" required="" type="text">
<input class="flex-1 bg-surface-container-lowest px-space-md py-3 rounded-lg text-on-surface font-body-sm text-body-sm placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary shadow-sm" placeholder="WhatsApp Narahubung" required="" type="text">
<button class="bg-primary hover:bg-secondary text-on-primary font-label-md text-label-md font-bold px-space-lg py-3 rounded-lg shadow-sm transition-all whitespace-nowrap" type="submit">
            Kirim Pengajuan Agenda
          </button>
</form>
<span class="font-label-sm text-label-sm text-on-surface-variant italic">
          *Surat permohonan resmi dan TOR dapat dilampirkan langsung via surel: <strong>dpc.gmni.sukabumiraya@gmail.com</strong>
</span>
</div>
</div>
</section>
<!-- Interactive JavaScript for Live Filtering and Calendar Month Toggling -->

</div>
@endverbatim
