@verbatim
<div class="flex flex-col w-full">
<!-- Progress Bar for Reading Depth -->
<div class="fixed top-20 left-0 right-0 h-1 bg-surface-container z-40">
<div class="h-full bg-primary w-0 transition-all duration-150" id="readingProgress"></div>
</div>
<!-- Breadcrumbs & Document Classification Bar -->
<section class="w-full bg-surface-container-low py-space-sm px-margin">
<div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-space-sm">
<nav aria-label="Breadcrumb" class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" data-path="beranda" href="#">
<span class="material-symbols-outlined text-[16px]">home</span>
<span>Beranda</span>
</a>
<span class="text-outline text-xs">/</span>
<a class="hover:text-primary transition-colors" data-path="berita" href="#">Warta & Berita</a>
<span class="text-outline text-xs">/</span>
<span class="text-on-surface font-semibold">Aksi & Advokasi</span>
</nav>
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="font-label-sm text-label-sm text-on-surface uppercase tracking-widest font-bold">Dokumen Resmi No: 088/SP/DPC-GMNI/SMI/X/2024</span>
</div>
</div>
</section>
<!-- Article Header & Hero Canvas -->
<article class="w-full bg-surface pt-space-md pb-space-xl">
<div class="max-w-7xl mx-auto px-margin">
<!-- Category Badge & Priority Header -->
<div class="flex flex-wrap items-center gap-space-sm mb-space-sm">
<span class="px-space-sm py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm tracking-wider font-bold uppercase shadow-sm">
          Siaran Pers Cabang
        </span>
<span class="px-space-sm py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase font-semibold">
          Agraria & Kedaulatan Pangan
        </span>
<span class="text-outline text-xs hidden sm:inline">•</span>
<span class="font-label-md text-label-md text-primary font-bold tracking-tight">Kajian Khusus Wilayah Sukabumi</span>
</div>
<!-- Main Headline -->
<h1 class="font-headline-xl text-headline-xl text-on-surface font-extrabold tracking-tight leading-tight mb-space-md max-w-5xl">
        Sikapi Kenaikan Harga Pupuk & Alih Fungsi Lahan, DPC GMNI Sukabumi Raya Desak Reformasi Agraria Sejati di Tingkat Daerah
      </h1>
<!-- Meta Information Strip -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md py-space-sm bg-surface-container-low rounded-xl px-space-md mb-space-lg shadow-sm">
<!-- Author & Time Details -->
<div class="flex flex-wrap items-center gap-space-md">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold font-headline-sm text-headline-sm">
              G
            </div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-bold">
                Bidang Agitasi & Propaganda / Kebijakan Publik
              </span>
<span class="font-body-sm text-body-sm text-on-surface-variant">
                Dewan Pimpinan Cabang GMNI Sukabumi Raya
              </span>
</div>
</div>
<div class="hidden sm:flex items-center gap-space-md font-body-sm text-body-sm text-on-surface-variant pl-space-sm">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[18px] text-primary">calendar_today</span>
              24 Oktober 2024
            </span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[18px] text-tertiary">timer</span>
              5 Menit Baca
            </span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[18px] text-secondary">visibility</span>
              1.420 Kali Dibaca
            </span>
</div>
</div>
<!-- Quick Action Toolbar -->
<div class="flex items-center gap-1 sm:gap-2">
<!-- WhatsApp Share -->
<a class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-all" href="https://api.whatsapp.com/send?text=Siaran%20Pers%20DPC%20GMNI%20Sukabumi%20Raya" rel="noopener noreferrer" target="_blank" title="Bagikan ke WhatsApp">
<span class="material-symbols-outlined text-[18px]">chat</span>
</a>
<!-- Twitter / X -->
<a class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-all" href="#" title="Bagikan ke X/Twitter">
<span class="font-label-sm text-label-sm font-black">X</span>
</a>
<!-- Facebook -->
<a class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-all" href="#" title="Bagikan ke Facebook">
<span class="material-symbols-outlined text-[18px]">public</span>
</a>
<!-- Copy Link -->
<button class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-all" id="copyLinkBtn" onclick="copyArticleLink()" title="Salin Tautan">
<span class="material-symbols-outlined text-[18px]">content_copy</span>
</button>
<!-- Print -->
<button class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface hover:bg-primary hover:text-on-primary transition-all" onclick="window.print()" title="Cetak Rilis Pers">
<span class="material-symbols-outlined text-[18px]">print</span>
</button>
<!-- Bookmark / Save -->
<button class="px-3 h-9 rounded-lg bg-primary-container text-on-primary-container font-label-sm text-label-sm font-semibold flex items-center gap-1 hover:bg-primary hover:text-on-primary transition-all shadow-sm" id="saveArticleBtn" onclick="toggleSaveArticle()" title="Simpan Artikel">
<span class="material-symbols-outlined text-[16px]" id="saveIcon">bookmark_border</span>
<span class="hidden sm:inline" id="saveText">Simpan</span>
</button>
</div>
</div>
<!-- Main Featured Hero Photo -->
<figure class="w-full mb-space-xl">
<div class="relative w-full overflow-hidden rounded-xl bg-surface-container-high shadow-md aspect-[16/9] lg:aspect-[21/9]">
<img alt="Aksi advokasi massa kader DPC GMNI Sukabumi Raya di depan Gedung Daerah" class="w-full h-full object-cover object-center transform hover:scale-[1.01] transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/ALJJyrC5MZx4O2rppSojQNlgyDDxhLwa-ZfVgVwSdzu-rLAQLBoFqDGma5bfYLQOs9nHG15aUA6aiyLELf_d5pQoTpoWFVRCyHWxN0-V7W5_rFHo8oN0rFeG5d6i_Dcj42daAZ7p58a-d1kkSaao6XOyhQ3KTG63pbLgGzs6MtBIlEPrv907l0PdJaLY2urVTsJOmOgFEakIS8fstWPxav68QZosxKeFHmfj_ZH3VUe_4I8N"/>
<div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-transparent to-transparent opacity-60"></div>
<div class="absolute bottom-4 left-4 right-4 text-surface-container-lowest flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-widest bg-primary/90 px-space-xs py-0.5 rounded text-on-primary font-bold">
              Dokumentasi Lapangan Cabang
            </span>
<span class="font-body-sm text-body-sm opacity-90 hidden sm:inline">Foto: Biro Agitasi & Propaganda GMNI Sukabumi Raya</span>
</div>
</div>
<figcaption class="mt-2 font-body-sm text-body-sm text-on-surface-variant italic px-1 flex items-start gap-2">
<span class="material-symbols-outlined text-[18px] text-primary not-italic shrink-0">photo_camera</span>
<span>Aksi simbolik dan penyampaian maklumat kerakyatan oleh kader DPC GMNI Sukabumi Raya mengawal hak-hak petani marhaen atas kepastian pupuk bersubsidi dan perlindungan zona sawah lestari di Sukabumi.</span>
</figcaption>
</figure>
<!-- Main Layout 2-Column: Editorial Content (8 cols) + Contextual Sidebar (4 cols) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- Left Column: Rich Editorial Article (8 Cols) -->
<main class="lg:col-span-8 flex flex-col space-y-space-lg">
<!-- Lead Paragraph -->
<div class="p-space-md rounded-xl bg-surface-container-low shadow-sm">
<p class="font-body-lg text-body-lg text-on-surface font-semibold leading-relaxed">
              SUKABUMI RAYA — Keresahan mendalam yang dirasakan oleh para petani marhaen di pelosok Sukabumi Utara hingga Sukabumi Selatan memuncak menyusul lonjakan tajam harga pupuk nonsubsidi, kelangkaan kuota pupuk subsidi, serta ekspansi alih fungsi lahan sawah produktif menjadi kawasan industri dan komersial tak terkendali. Merespons ancaman de-agrarianisasi ini, Dewan Pimpinan Cabang Gerakan Mahasiswa Nasional Indonesia (DPC GMNI) Sukabumi Raya menegaskan komitmen perlawanan kerakyatan dan mendesak percepatan pembentukan Gugus Tugas Khusus Reforma Agraria Sejati di tingkat Kabupaten dan Kota Sukabumi.
            </p>
</div>
<!-- Editorial Article Body -->
<div class="space-y-space-md font-body-md text-body-md text-on-surface leading-relaxed text-justify">
<p>
              Berdasarkan hasil investigasi lapangan yang dihimpun oleh Tim Advokasi Kebijakan Publik DPC GMNI Sukabumi Raya selama rentang Agustus hingga Oktober 2024, dijumpai disparitas yang sangat timpang antara kebutuhan riil kelompok tani marhaen dengan alokasi Rencana Definitif Kebutuhan Kelompok (e-RDKK). Fenomena ini kian diperparah oleh praktik perembesan distribusi pupuk di jalur informal yang mempermainkan harga eceran tertinggi (HET) di tingkat pengecer lini IV.
            </p>
<!-- Prominent Blockquote -->
<figure class="my-space-md p-space-lg rounded-xl bg-surface-container relative overflow-hidden shadow-sm">
<div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
<span class="material-symbols-outlined text-primary text-[42px] opacity-20 absolute right-4 top-2 select-none">format_quote</span>
<blockquote class="font-headline-sm text-headline-sm text-on-surface font-bold italic leading-snug pl-space-xs">
                “Kedaulatan pangan tidak akan pernah terwujud selama kaum tani marhaen terhimpit mafia pupuk dan perampasan ruang hidup. GMNI Sukabumi Raya konsisten berdiri di garis depan membela kaum tertindas!”
              </blockquote>
<figcaption class="mt-space-sm pl-space-xs font-label-md text-label-md text-primary font-bold uppercase tracking-wider flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
                Ketua DPC GMNI Sukabumi Raya
              </figcaption>
</figure>
<!-- Sub-Section 1 -->
<div class="pt-space-sm">
<div class="flex items-center gap-2 mb-space-sm">
<span class="w-7 h-7 rounded bg-primary text-on-primary flex items-center justify-center font-headline-sm text-headline-sm font-bold">1</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">
                  Fakta Lapangan dan Ketimpangan Distribusi Pupuk Subsidi
                </h2>
</div>
<p class="mb-space-sm">
                Di sentra-sentra produksi gabah Sukabumi Selatan seperti Jampang Kulon, Ciracap, dan Surade, harga pupuk jenis Urea nonsubsidi meroket hingga 40-50% di atas daya beli riil petani penggarap. Sementara itu, alokasi pupuk bersubsidi melalui mekanisme kartu tani kerap terhambat oleh verifikasi birokrasi perbankan, minimnya sinyal konektivitas mesin EDC, dan inkonsistensi data penerima manfaat.
              </p>
<p>
                Biro Riset DPC GMNI Sukabumi Raya mencatat sedikitnya 32% petani dengan luas lahan di bawah 0,5 hektar terpaksa berhutang ke tengkulak lokal dengan skema ijon demi memenuhi siklus tanam kuartal ketiga. Hal ini mencerminkan kegagalan struktural pengawasan rantai pasok pupuk oleh Komisi Pengawasan Pupuk dan Pestisida (KP3) daerah.
              </p>
</div>
<!-- Contextual Photo Insert: Policy Study & Cadre Discussion -->
<figure class="my-space-md">
<div class="w-full overflow-hidden rounded-xl bg-surface-container-high shadow-sm aspect-[16/9]">
<img alt="Forum diskusi kajian kebijakan agraria dan telaah hukum oleh fungsionaris DPC GMNI Sukabumi Raya" class="w-full h-full object-cover object-center" src="https://lh3.googleusercontent.com/aida/ALJJyrA9R16xcSaahwkkTWp8_WBDhSRg28GGzHL2aAPfhi08tAETLDFxK7LxGPD1NFpWwEy4hwu1TYg8CDbQZ-aKaPjWaKa1-cG4uJeUsUVJeZprs0OWr9avOsvU3cAhrJfakh8K11BjdKQggMTONbKMfyZioeuV8hUnZXpyZXCpjPrZI-_zi4w46lxUY_Nn7nRmGBNXpsjINuIDINgcVOs2g_py4DRo0LdXgjUw0ZK4fZJ6"/>
</div>
<figcaption class="mt-2 font-body-sm text-body-sm text-on-surface-variant italic px-1 flex items-start gap-2">
<span class="material-symbols-outlined text-[18px] text-tertiary not-italic shrink-0">menu_book</span>
<span>Fokus Kajian Kebijakan: Pengurus Cabang dan delegasi Komisariat se-Sukabumi Raya membedah dokumen RTRW dan data spasial alih fungsi lahan di Graha Perjuangan Marhaenis.</span>
</figcaption>
</figure>
<!-- Sub-Section 2 -->
<div class="pt-space-sm">
<div class="flex items-center gap-2 mb-space-sm">
<span class="w-7 h-7 rounded bg-primary text-on-primary flex items-center justify-center font-headline-sm text-headline-sm font-bold">2</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">
                  Dampak Masif Alih Fungsi Lahan Produktif di Sukabumi
                </h2>
</div>
<p class="mb-space-sm">
                Selain carut marut sarana produksi tani, Kabupaten Sukabumi mengalami laju degradasi Lahan Pertanian Pangan Berkelanjutan (LP2B) yang kian mengkhawatirkan. Di koridor Sukabumi Utara—termasuk Cicurug, Parungkuda, dan Cibadak—konversi lahan sawah beririgasi teknis menjadi pergudangan logistik dan perumahan komersial berjalan tanpa transparansi tata ruang yang ketat.
              </p>
<p>
                GMNI memandang fenomena ini bukan sekadar persoalan lingkungan, melainkan bentuk dehumanisasi ekonomi di mana kaum tani tercerabut dari alat produksinya yang paling mendasar, yaitu tanah airnya sendiri. Ketika tanah produktif hilang, kaum tani dipaksa beralih menjadi buruh berupah murah di tanah kelahirannya sendiri tanpa jaminan masa depan.
              </p>
</div>
<!-- Sub-Section 3: Demands & Integrity Pact -->
<div class="pt-space-sm">
<div class="flex items-center gap-2 mb-space-sm">
<span class="w-7 h-7 rounded bg-primary text-on-primary flex items-center justify-center font-headline-sm text-headline-sm font-bold">3</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">
                  Tuntutan & 5 Poin Pakta Integritas DPC GMNI Sukabumi Raya
                </h2>
</div>
<p class="mb-space-md">
                Menyikapi krisis struktural tersebut, DPC GMNI Sukabumi Raya melayangkan mosi ketidakpercayaan terhadap pengawasan sektor pertanian daerah dan menetapkan 5 Poin Pakta Integritas Kerakyatan yang wajib ditandatangani oleh pimpinan DPRD serta Bupati Sukabumi:
              </p>
<!-- Numbered Demands Bento -->
<div class="grid grid-cols-1 gap-space-sm">
<div class="p-space-md rounded-lg bg-surface-container-low shadow-sm flex items-start gap-space-sm">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container shrink-0 flex items-center justify-center font-bold font-label-md text-label-md">01</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">Audit Total Jalur Distribusi Pupuk Subsidi</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Mendesak Kejaksaan Negeri dan Kepolisian Resor Sukabumi mengusut tuntas indikasi penimbunan pupuk dan mencabut izin distributor/kios nakal yang menjual di atas HET nasional.</p>
</div>
</div>
<div class="p-space-md rounded-lg bg-surface-container-low shadow-sm flex items-start gap-space-sm">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container shrink-0 flex items-center justify-center font-bold font-label-md text-label-md">02</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">Moratorium Alih Fungsi Sawah Beririgasi Teknis (LP2B)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Menuntut Pemkab Sukabumi membekukan seluruh izin prinsip dan Persetujuan Bangunan Gedung (PBG) pada zona hijau pertanian pangan abadi tanpa kompromi.</p>
</div>
</div>
<div class="p-space-md rounded-lg bg-surface-container-low shadow-sm flex items-start gap-space-sm">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container shrink-0 flex items-center justify-center font-bold font-label-md text-label-md">03</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">Aktivasi Gugus Tugas Reforma Agraria (GTRA) yang Inklusif</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Melibatkan serikat petani marhaen dan gerakan mahasiswa dalam inventarisasi Tanah Obyek Reforma Agraria (TORA) serta penyelesaian sengketa lahan eks-HGU terlantar.</p>
</div>
</div>
<div class="p-space-md rounded-lg bg-surface-container-low shadow-sm flex items-start gap-space-sm">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container shrink-0 flex items-center justify-center font-bold font-label-md text-label-md">04</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">Skema Subsidi Pupuk Alternatif Daerah (APBD)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Mendorong relokasi pos anggaran APBD yang tidak urgen untuk membentuk dana talangan darurat sarana produksi pertanian ramah lingkungan dan pupuk hayati.</p>
</div>
</div>
<div class="p-space-md rounded-lg bg-surface-container-low shadow-sm flex items-start gap-space-sm">
<span class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container shrink-0 flex items-center justify-center font-bold font-label-md text-label-md">05</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-1">Jaminan Perlindungan Hukum Petani Marhaen</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Hentikan kriminalisasi terhadap petani lokal yang mempertahankan hak garap tanah adat dan tanah ulayat dari intimidasi korporasi perkebunan swasta.</p>
</div>
</div>
</div>
</div>
<!-- Concluding Paragraph -->
<p class="pt-space-sm">
              Apabila dalam tempo 7x24 jam sejak rilis ini dipublikasikan tidak ada itikad baik dari dinas terkait dan pemangku kebijakan daerah, DPC GMNI Sukabumi Raya bersama seluruh 10 Dewan Pengurus Komisariat (DPK) definitif serta barisan petani binaan akan menggelar konsolidasi akbar dan aksi massa kerakyatan serempak di pusat pemerintahan Kabupaten Sukabumi.
            </p>
</div>
<!-- Tags & Social Bookmark Footer -->
<div class="pt-space-md flex flex-wrap items-center justify-between gap-space-md bg-surface-container-low p-space-md rounded-xl">
<div class="flex flex-wrap items-center gap-2">
<span class="font-label-md text-label-md text-on-surface font-bold flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-primary">sell</span>
                Topik Terkait:
              </span>
<a class="px-3 py-1 rounded-full bg-surface-container text-on-surface text-label-sm font-label-sm hover:bg-primary hover:text-on-primary transition-all" href="#">#ReformasiAgraria</a>
<a class="px-3 py-1 rounded-full bg-surface-container text-on-surface text-label-sm font-label-sm hover:bg-primary hover:text-on-primary transition-all" href="#">#KaumMarhaen</a>
<a class="px-3 py-1 rounded-full bg-surface-container text-on-surface text-label-sm font-label-sm hover:bg-primary hover:text-on-primary transition-all" href="#">#GMNISukabumi</a>
<a class="px-3 py-1 rounded-full bg-surface-container text-on-surface text-label-sm font-label-sm hover:bg-primary hover:text-on-primary transition-all" href="#">#KedaulatanPangan</a>
<a class="px-3 py-1 rounded-full bg-surface-container text-on-surface text-label-sm font-label-sm hover:bg-primary hover:text-on-primary transition-all" href="#">#AdvokasiKerakyatan</a>
</div>
<div class="flex items-center gap-2">
<button class="px-space-sm py-1.5 rounded-lg bg-surface text-on-surface font-label-sm text-label-sm font-bold flex items-center gap-1 shadow-sm hover:bg-primary hover:text-on-primary transition-all" onclick="copyArticleLink()">
<span class="material-symbols-outlined text-[16px]">share</span>
<span>Bagikan Rilis</span>
</button>
</div>
</div>
<!-- Cadre Author Statement Box -->
<div class="p-space-lg rounded-xl bg-surface-container flex flex-col sm:flex-row gap-space-md items-center sm:items-start shadow-sm">
<div class="w-16 h-16 rounded-full bg-primary text-on-primary shrink-0 flex items-center justify-center font-headline-md text-headline-md font-extrabold shadow-sm">
              AGIT
            </div>
<div class="flex flex-col text-center sm:text-left">
<div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 mb-1">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Biro Agitasi, Propaganda & Advokasi Kebijakan</span>
<span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold uppercase">Struktural DPC</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-sm">
                Bidang kerja resmi Dewan Pimpinan Cabang GMNI Sukabumi Raya yang bertugas mengawal dialektika perjuangan kaum marhaen, merumuskan kritik kebijakan publik berbasis sains kerakyatan, dan memimpin gerakan advokasi struktural di Sukabumi Raya.
              </p>
<div class="flex flex-wrap items-center justify-center sm:justify-start gap-space-md font-label-sm text-label-sm text-primary font-bold">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">mail</span> agitprop@gmnisukabumi.org</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">location_on</span> Graha Marhaen Sukabumi</span>
</div>
</div>
</div>
</main>
<!-- Right Column: Sidebar Widgets (4 Cols) -->
<aside class="lg:col-span-4 flex flex-col space-y-space-lg">
<!-- Widget 1: Official PDF Document Download Banner -->
<div class="p-space-lg rounded-xl bg-inverse-surface text-inverse-on-surface shadow-md relative overflow-hidden">
<div class="absolute -right-6 -bottom-6 w-28 h-28 rounded-full bg-primary/20 blur-xl"></div>
<div class="flex items-center gap-2 mb-space-sm text-primary-fixed">
<span class="material-symbols-outlined text-[24px]">description</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider font-bold">Dokumen Berkas Resmi</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-bold mb-2 text-surface-container-lowest">
              Naskah Lengkap Pakta Integritas Reforma Agraria
            </h3>
<p class="font-body-sm text-body-sm text-surface-dim leading-relaxed mb-space-md">
              Unduh salinan resmi berkas siaran pers, data tabulasi e-RDKK, dan peta spasial alih fungsi sawah dalam format PDF resmi DPC GMNI Sukabumi Raya.
            </p>
<div class="flex items-center justify-between text-surface-dim font-label-sm text-label-sm mb-space-md">
<span>Ukuran: 2.4 MB</span>
<span>Format: PDF Bertanda Tangan</span>
</div>
<a class="w-full py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-bold flex items-center justify-center gap-2 hover:bg-secondary transition-all shadow-sm" download="" href="#">
<span class="material-symbols-outlined text-[18px]">download</span>
<span>Unduh Siaran Pers (PDF)</span>
</a>
</div>
<!-- Widget 2: Related Press Releases (3 items) -->
<div class="p-space-md rounded-xl bg-surface-container-low shadow-sm">
<div class="flex items-center justify-between mb-space-md pb-space-xs">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold uppercase tracking-tight">Rilis Pers Terkait</h3>
</div>
<a class="font-label-sm text-label-sm text-primary font-bold hover:underline" data-path="berita" href="#">Lihat Semua</a>
</div>
<div class="flex flex-col space-y-space-md">
<!-- Item 1 -->
<article class="flex gap-space-sm group cursor-pointer">
<div class="w-20 h-20 rounded-lg bg-surface-container-high shrink-0 overflow-hidden relative">
<div class="w-full h-full bg-surface-container flex items-center justify-center text-primary font-bold text-xs">
<span class="material-symbols-outlined text-[24px]">water_drop</span>
</div>
</div>
<div class="flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-primary font-bold uppercase">Krisis Ekologis</span>
<h4 class="font-headline-sm text-[15px] font-bold text-on-surface group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                    Tolak Tambang Pasir Besi Ilegal di Pesisir Selatan Sukabumi
                  </h4>
<span class="font-body-sm text-[12px] text-on-surface-variant">18 Oktober 2024</span>
</div>
</article>
<!-- Item 2 -->
<article class="flex gap-space-sm group cursor-pointer">
<div class="w-20 h-20 rounded-lg bg-surface-container-high shrink-0 overflow-hidden relative">
<div class="w-full h-full bg-surface-container flex items-center justify-center text-secondary font-bold text-xs">
<span class="material-symbols-outlined text-[24px]">school</span>
</div>
</div>
<div class="flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Pendidikan Marhaen</span>
<h4 class="font-headline-sm text-[15px] font-bold text-on-surface group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                    Pekan Penerimaan Anggota Baru (PPAB) Serentak 10 Komisariat Sukabumi
                  </h4>
<span class="font-body-sm text-[12px] text-on-surface-variant">12 Oktober 2024</span>
</div>
</article>
<!-- Item 3 -->
<article class="flex gap-space-sm group cursor-pointer">
<div class="w-20 h-20 rounded-lg bg-surface-container-high shrink-0 overflow-hidden relative">
<div class="w-full h-full bg-surface-container flex items-center justify-center text-tertiary font-bold text-xs">
<span class="material-symbols-outlined text-[24px]">gavel</span>
</div>
</div>
<div class="flex flex-col justify-between">
<span class="font-label-sm text-label-sm text-tertiary font-bold uppercase">Hukum & HAM</span>
<h4 class="font-headline-sm text-[15px] font-bold text-on-surface group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                    GMNI Sukabumi Dampingi Buruh Tekstil Tuntut Pesangon PHK Sepihak
                  </h4>
<span class="font-body-sm text-[12px] text-on-surface-variant">04 Oktober 2024</span>
</div>
</article>
</div>
</div>
<!-- Widget 3: Newsletter Marhaen Subscribe Box -->
<div class="p-space-lg rounded-xl bg-surface-container shadow-sm">
<div class="flex items-center gap-2 mb-space-xs text-primary">
<span class="material-symbols-outlined text-[22px]">mark_email_read</span>
<span class="font-label-md text-label-md font-bold uppercase">Warta Cabang Digital</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
              Dapatkan Terbitan Buletin & Analisis Kebijakan
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">
              Kirimkan rilis pers langsung ke email Anda setiap pekan untuk mengawal gerak langkah perjuangan kaum marhaen Sukabumi.
            </p>
<form class="space-y-space-xs" onsubmit="handleSubscribe(event)">
<input class="w-full px-space-sm py-2 rounded-lg bg-surface text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-primary shadow-sm" placeholder="nama@email.com" required="" type="email"/>
<button class="w-full py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-secondary transition-all shadow-sm" type="submit">
                Berlangganan Sekarang
              </button>
</form>
<p class="hidden text-xs text-secondary font-semibold mt-2 text-center" id="subscribeSuccess">
              Terima kasih, kawan! Alamat surel Anda berhasil terdaftar.
            </p>
</div>
<!-- Widget 4: Quick Action Hotline Advokasi Rakyat -->
<div class="p-space-md rounded-xl bg-surface-container-high text-on-surface shadow-sm">
<span class="font-label-sm text-label-sm uppercase font-bold text-primary block mb-1">Posko Pengaduan Tani & Buruh</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
              Memiliki informasi pelanggaran distribusi pupuk atau sengketa lahan di desa Anda? Laporkan ke Tim Investigasi GMNI Sukabumi Raya.
            </p>
<a class="inline-flex items-center gap-2 font-label-sm text-label-sm font-bold text-primary hover:underline" href="https://wa.me/">
<span>Hubungi Hotline Advokasi</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</aside>
</div>
</div>
</article>
<!-- Previous & Next Article Navigation Split Panel -->
<section class="w-full bg-surface-container-low py-space-lg px-margin">
<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Previous -->
<a class="p-space-md rounded-xl bg-surface shadow-sm hover:bg-surface-container transition-all flex flex-col justify-between group" href="#">
<div class="flex items-center gap-2 text-primary font-label-sm text-label-sm font-bold uppercase mb-2">
<span class="material-symbols-outlined text-[16px]">arrow_back</span>
<span>Warta Sebelumnya</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors font-bold line-clamp-2">
          Kaderisasi Tingkat Dasar (KTD) Gabungan Sukabumi Raya: Menggembleng Watak Marhaenis Zaman Baru
        </h4>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-2">15 Oktober 2024 • Bidang Kaderisasi</span>
</a>
<!-- Next -->
<a class="p-space-md rounded-xl bg-surface shadow-sm hover:bg-surface-container transition-all flex flex-col justify-between items-end text-right group" href="#">
<div class="flex items-center gap-2 text-primary font-label-sm text-label-sm font-bold uppercase mb-2">
<span>Warta Selanjutnya</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors font-bold line-clamp-2">
          Pelantikan Pengurus Komisariat STISIP Widyapuri Mandiri: Teguhkan Ideologi di Kampus Kerakyatan
        </h4>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-2">29 Oktober 2024 • Dewan Pimpinan Cabang</span>
</a>
</div>
</section>
<!-- Interactive Cadre Response & Comment Section -->
<section class="w-full bg-surface py-space-xl px-margin">
<div class="max-w-5xl mx-auto">
<div class="flex items-center justify-between mb-space-lg pb-space-xs">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-[28px]">chat</span>
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">Tanggapan & Suara Kader</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Ruang dialektika kritis dan konsolidasi gagasan kader Marhaenis se-Sukabumi Raya</p>
</div>
</div>
<span class="px-space-sm py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold" id="commentCount">
          3 Tanggapan
        </span>
</div>
<!-- Comment Submission Form -->
<div class="p-space-lg rounded-xl bg-surface-container-low shadow-sm mb-space-xl">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-space-sm">Kirim Tanggapan / Pandangan Kritis</h3>
<form class="space-y-space-md" id="commentForm" onsubmit="postComment(event)">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div>
<label class="block font-label-sm text-label-sm font-bold uppercase text-on-surface-variant mb-1">Nama Lengkap / Nama Kader</label>
<input class="w-full px-space-sm py-2 rounded-lg bg-surface text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-primary shadow-sm" id="commentAuthor" placeholder="Contoh: Bung Rizki Pratama" required="" type="text"/>
</div>
<div>
<label class="block font-label-sm text-label-sm font-bold uppercase text-on-surface-variant mb-1">Komisariat Asal / Afiliasi Organisasi</label>
<select class="w-full px-space-sm py-2 rounded-lg bg-surface text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-primary shadow-sm" id="commentOrigin">
<option value="DPK UMMI">DPK UMMI Sukabumi</option>
<option value="DPK Nusa Putra">DPK Nusa Putra University</option>
<option value="DPK STISIP Widyapuri Mandiri">DPK STISIP Widyapuri Mandiri</option>
<option value="DPK STAI Syamsul 'Ulum">DPK STAI Syamsul 'Ulum</option>
<option value="DPK STIE Pasim">DPK STIE Pasim</option>
<option value="DPK STH Pasundan">DPK STH Pasundan</option>
<option value="DPK Politeknik Sukabumi">DPK Politeknik Sukabumi</option>
<option value="DPK Universitas Linggabuana">DPK Universitas Linggabuana PGRI</option>
<option value="DPK BSI Sukabumi">DPK BSI Sukabumi</option>
<option value="DPK STAI Sukabumi">DPK STAI Sukabumi</option>
<option value="Alumni / Anggota Luar Biasa">Alumni / Anggota Luar Biasa</option>
<option value="Masyarakat Umum">Masyarakat Umum / Petani Marhaen</option>
</select>
</div>
</div>
<div>
<label class="block font-label-sm text-label-sm font-bold uppercase text-on-surface-variant mb-1">Ulasan / Catatan Lapangan Tambahan</label>
<textarea class="w-full px-space-sm py-2 rounded-lg bg-surface text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-primary shadow-sm" id="commentMessage" placeholder="Sampaikan pandangan dialektis Anda atau laporkan situasi riil di komisariat/desa dampingan..." required="" rows="3"></textarea>
</div>
<div class="flex items-center justify-between">
<p class="font-body-sm text-xs text-on-surface-variant">Tanggapan akan tampil secara terbuka demi transparansi gerakan.</p>
<button class="px-space-md py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-bold hover:bg-secondary transition-all shadow-sm flex items-center gap-1" type="submit">
<span>Kirimkan Sikap</span>
<span class="material-symbols-outlined text-[16px]">send</span>
</button>
</div>
</form>
</div>
<!-- Existing Comments Thread -->
<div class="space-y-space-md" id="commentsContainer">
<!-- Comment 1 -->
<div class="p-space-md rounded-xl bg-surface-container shadow-sm">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-primary text-on-primary font-bold text-xs flex items-center justify-center">FH</span>
<div>
<span class="font-label-md text-label-md font-bold text-on-surface">Bung Fahmi Hilmansyah</span>
<span class="font-label-sm text-label-sm text-primary font-semibold ml-2">DPK STISIP Widyapuri Mandiri</span>
</div>
</div>
<span class="font-body-sm text-xs text-on-surface-variant">24 Okt 2024, 18:30 WIB</span>
</div>
<p class="font-body-md text-body-md text-on-surface pl-10">
            Sepakat dengan poin nomor dua terkait moratorium LP2B. Kami di komisariat telah merampungkan draf kajian pemetaan sawah yang tergerus proyek industri di Cikembar. Siap satu komando bersama DPC turun ke jalan jika pemda tetap membisu!
          </p>
</div>
<!-- Comment 2 -->
<div class="p-space-md rounded-xl bg-surface-container shadow-sm">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-secondary text-on-secondary font-bold text-xs flex items-center justify-center">SR</span>
<div>
<span class="font-label-md text-label-md font-bold text-on-surface">Sarinah Rina Lestari</span>
<span class="font-label-sm text-label-sm text-primary font-semibold ml-2">DPK UMMI Sukabumi</span>
</div>
</div>
<span class="font-body-sm text-xs text-on-surface-variant">24 Okt 2024, 19:15 WIB</span>
</div>
<p class="font-body-md text-body-md text-on-surface pl-10">
            Isu pupuk ini sangat memberatkan kaum ibu tani marhaen di pedesaan. Modal tanam tidak pernah sebanding dengan harga gabah panen saat dibeli tengkulak. Advokasi ini harus tuntas hingga penerbitan regulasi perlindungan harga gabah tingkat petani!
          </p>
</div>
<!-- Comment 3 -->
<div class="p-space-md rounded-xl bg-surface-container shadow-sm">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-tertiary text-on-tertiary font-bold text-xs flex items-center justify-center">AS</span>
<div>
<span class="font-label-md text-label-md font-bold text-on-surface">Kang Asep Saepudin</span>
<span class="font-label-sm text-label-sm text-primary font-semibold ml-2">Kelompok Tani Marhaen Ciracap</span>
</div>
</div>
<span class="font-body-sm text-xs text-on-surface-variant">25 Okt 2024, 07:10 WIB</span>
</div>
<p class="font-body-md text-body-md text-on-surface pl-10">
            Hatur nuhun adik-adik mahasiswa GMNI yang masih peduli kepada nasib kami kaum petani kecil di selatan. Pupuk subsidi memang sulit sekali didapat saat musim tanam serentak. Terus perjuangkan suara kami. Merdeka!
          </p>
</div>
</div>
</div>
</section>
<!-- Editorial Recommended Section (Bento Mosaic) -->
<section class="w-full bg-surface-container-low py-space-xl px-margin">
<div class="max-w-7xl mx-auto">
<div class="flex items-center justify-between mb-space-lg">
<div>
<span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-widest block mb-1">Koleksi Warta Perjuangan</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-extrabold tracking-tight">Rekomendasi Warta Terbaru Cabang</h2>
</div>
<a class="px-space-md py-2 rounded-lg bg-surface text-on-surface font-label-md text-label-md font-bold hover:bg-primary hover:text-on-primary transition-all shadow-sm flex items-center gap-1" data-path="berita" href="#">
<span>Indeks Berita Lengkap</span>
<span class="material-symbols-outlined text-[16px]">trending_flat</span>
</a>
</div>
<!-- Bento Grid (3 Cards) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Bento 1 -->
<div class="rounded-xl bg-surface p-space-md shadow-sm flex flex-col justify-between group hover:shadow-md transition-all">
<div>
<div class="flex items-center justify-between mb-space-sm">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-on-surface text-label-sm font-label-sm font-bold uppercase">Ideologi & Kader</span>
<span class="font-body-sm text-xs text-on-surface-variant">20 Okt 2024</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors mb-2">
              Kaderisasi Berkelanjutan: GMNI Sukabumi Luncurkan Sekolah Pemikiran Marhaenisme Angkatan VII
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
              Membangun fondasi epistemologi kader dalam menjawab tantangan neokolonialisme digital dan krisis ekologi di Sukabumi Raya.
            </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between text-primary font-label-sm text-label-sm font-bold">
<span>Baca Selengkapnya</span>
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</div>
<!-- Bento 2 -->
<div class="rounded-xl bg-surface p-space-md shadow-sm flex flex-col justify-between group hover:shadow-md transition-all">
<div>
<div class="flex items-center justify-between mb-space-sm">
<span class="px-2.5 py-0.5 rounded-full bg-primary-container text-on-primary-container text-label-sm font-label-sm font-bold uppercase">Konsolidasi Cabang</span>
<span class="font-body-sm text-xs text-on-surface-variant">16 Okt 2024</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors mb-2">
              Rapat Kerja Cabang II: Penguatan Basis Komisariat Kampus dan Desa Dampingan Marhaen
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
              Konsolidasi program kerja tahunan menegaskan agenda advokasi agraria sebagai prioritas strategis organisasi seluruh komisariat se-Sukabumi.
            </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between text-primary font-label-sm text-label-sm font-bold">
<span>Baca Selengkapnya</span>
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</div>
<!-- Bento 3 -->
<div class="rounded-xl bg-surface p-space-md shadow-sm flex flex-col justify-between group hover:shadow-md transition-all">
<div>
<div class="flex items-center justify-between mb-space-sm">
<span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed text-label-sm font-label-sm font-bold uppercase">Karya Ilmiah</span>
<span class="font-body-sm text-xs text-on-surface-variant">08 Okt 2024</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors mb-2">
              Jurnal Marhaenis Vol. 4: Kajian Kritis Rencana Tata Ruang Wilayah (RTRW) Kabupaten Sukabumi 2024-2044
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
              Kajian akademis interdisipliner kader menyikapi kerentanan tata ruang Sukabumi terhadap ekspansi kapital ekstraktif dan bencana hidrometeorologi.
            </p>
</div>
<div class="mt-space-md pt-space-sm flex items-center justify-between text-primary font-label-sm text-label-sm font-bold">
<span>Baca Selengkapnya</span>
<span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
</div>
</div>
</div>
</div>
</section>
</div>
@endverbatim
