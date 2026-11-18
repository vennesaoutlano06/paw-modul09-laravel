<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harian Venesa Outlano - Web Personal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&family=Playfair+Display:wght@700;900&family=Lora:ital,wght@0,400;0,600;1,400&family=IBM+Plex+Mono:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite('resources/sass/app.scss')
</head>
<body>

<!-- Topbar -->
<div class="container topbar d-flex justify-content-between align-items-center">
    <span id="tgl"></span>
    <span class="d-none d-sm-inline">Surabaya</span>
    <button id="mode" class="btn btn-sm btn-outline-dark" type="button"><i class="bi bi-moon-stars"></i> Mode Gelap</button>
</div>

<!-- Masthead -->
<header class="container masthead text-center">
    <h1>Harian Venesa Outlano</h1>
    <p class="tagline mb-0">Web Personal &middot; Surabaya &middot; Edisi 2026</p>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-md sticky-top paper-nav">
    <div class="container">
        <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Menu"><i class="bi bi-list fs-3"></i></button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto text-uppercase text-center">
                <li class="nav-item"><a class="nav-link" href="#utama">Berita Utama</a></li>
                <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#keahlian">Indeks Keahlian</a></li>
                <li class="nav-item"><a class="nav-link" href="#liputan">Liputan Khusus</a></li>
                <li class="nav-item"><a class="nav-link" href="#arsip">Arsip</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Iklan Baris</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-4">

    <!-- Berita Utama -->
    <section id="utama" class="row g-4 pb-4">
        <div class="col-lg-7">
            <span class="kicker">Berita Utama</span>
            <h2 class="headline">Dari Surabaya, Seorang Mahasiswa Menyulap Data Menjadi Cerita</h2>
            <p class="subhead">Venesa Outlano, mahasiswa S1 Sistem Informasi Telkom University Surabaya, belajar membangun web yang rapi, cepat, dan enak dibaca.</p>
            <p class="byline">Oleh Redaksi Pribadi</p>
            <p class="dropcap">Di balik layar laptop yang selalu menyala hingga larut, ia merangkai baris demi baris kode. Baginya, sistem informasi bukan sekadar tabel dan formulir, melainkan cara membuat hal rumit terasa sederhana bagi banyak orang.</p>
            <p>Praktikum Pengembangan Aplikasi Web menjadi pintu masuknya mengenal Bootstrap. Halaman ini adalah buktinya: sebuah web personal yang dirancang menyerupai halaman depan koran.</p>
            <a href="#kontak" class="btn btn-ink">Pasang Iklan Kerja Sama</a>
            <a href="#liputan" class="btn btn-outline-dark ms-1">Baca Liputan Khusus</a>
        </div>
        <div class="col-lg-5">
            <figure class="m-0">
                <img src="{{ Vite::asset('resources/images/foto-saya.jpg') }}" class="img-fluid foto" alt="Foto Venesa Outlano mengerjakan tugas di kafe">
                <figcaption class="small fst-italic mt-2">Dokumentasi Venesa Outlano mengerjakan tugas saat tenggat mendekat.</figcaption>
            </figure>
        </div>
    </section>
    <hr class="rule">

    <!-- Profil -->
    <section id="profil" class="py-4">
        <h3 class="section-title">Profil Singkat</h3>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="columns-text">
                    <p>Venesa Outlano lahir dan tumbuh di Jawa Timur tepatnya di kota Surabaya. Sejak kecil ia gemar membongkar sesuatu untuk tahu cara kerjanya, kebiasaan yang kini berpindah dari mainan ke aplikasi.</p>
                    <p>Di kampus, ia mendalami analisis proses bisnis, basis data, dan pengembangan web. Ia percaya semakin baik sebuah sistem bekerja, semakin tidak terlihat keberadaannya bagi pengguna.</p>
                    <blockquote class="pullquote">&ldquo;Kode yang baik seperti berita yang baik: jelas, jujur, dan tidak bertele-tele.&rdquo;</blockquote>
                    <p>Di luar jam kuliah, ia gemar menjelajah kafe, mencatat ide, dan menerapkannya. Ia terbuka untuk magang, proyek kolaborasi, dan obrolan santai soal teknologi.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="databox">
                    <h4>Kotak Data</h4>
                    <table class="table table-sm mb-0">
                        <tbody>
                            <tr><th>Nama</th><td>Venesa Outlano</td></tr>
                            <tr><th>NIM</th><td>108052530014</td></tr>
                            <tr><th>Kampus</th><td>Telkom University Surabaya</td></tr>
                            <tr><th>Prodi</th><td>S1 Sistem Informasi</td></tr>
                            <tr><th>Domisili</th><td>Surabaya</td></tr>
                            <tr><th>Minat</th><td>UI/UX, Data, Bisnis</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <hr class="rule">

    <!-- Indeks Keahlian -->
    <section id="keahlian" class="py-4">
        <h3 class="section-title">Indeks Keahlian</h3>
        <div class="table-responsive">
            <table class="table align-middle ticker">
                <thead><tr><th>Kode</th><th>Keahlian</th><th style="width:40%">Penguasaan</th><th class="text-end">Tren</th></tr></thead>
                <tbody>
                    <tr><td>HTM</td><td>HTML &amp; CSS</td><td><div class="progress"><div class="progress-bar" style="width:80%">80%</div></div></td><td class="text-end up">&#9650; 5%</td></tr>
                    <tr><td>DSGN</td><td>UI/UX</td><td><div class="progress"><div class="progress-bar" style="width:65%">65%</div></div></td><td class="text-end up">&#9650; 20%</td></tr>
                    <tr><td>SQL</td><td>Basis Data</td><td><div class="progress"><div class="progress-bar" style="width:70%">70%</div></div></td><td class="text-end up">&#9650; 8%</td></tr>
                    <tr><td>JS</td><td>JavaScript</td><td><div class="progress"><div class="progress-bar" style="width:50%">50%</div></div></td><td class="text-end up">&#9650; 12%</td></tr>
                    <tr><td>IMK</td><td>Interaksi Manusia dan Komputer</td><td><div class="progress"><div class="progress-bar" style="width:55%">55%</div></div></td><td class="text-end flat">&#9644; 0%</td></tr>
                    <tr><td>SKS</td><td>Sistem Kebut Semalam</td><td><div class="progress"><div class="progress-bar" style="width:95%">95%</div></div></td><td class="text-end down">&#9660; 3%</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <hr class="rule">

    <!-- Liputan Khusus -->
    <section id="liputan" class="py-4">
        <h3 class="section-title">Liputan Khusus</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <article class="card h-100">
                    <img src="{{ Vite::asset('resources/images/project-1.svg') }}" class="card-img-top print" alt="Ilustrasi dasbor perpustakaan">
                    <div class="card-body">
                        <span class="badge text-bg-dark">Basis Data</span>
                        <h5 class="card-title mt-2">Sistem Informasi Perpustakaan</h5>
                        <p class="card-text">Pencatatan peminjaman buku dengan laporan otomatis.</p>
                        <button class="btn btn-sm btn-ink" data-bs-toggle="modal" data-bs-target="#detail" data-judul="Sistem Informasi Perpustakaan" data-isi="Aplikasi untuk mencatat anggota, buku, dan peminjaman. Dilengkapi laporan keterlambatan dan grafik buku terpopuler.">Baca selengkapnya</button>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="card h-100">
                    <img src="{{ Vite::asset('resources/images/project-2.svg') }}" class="card-img-top print" alt="Ilustrasi aplikasi TryFit">
                    <div class="card-body">
                        <span class="badge text-bg-danger">Mobile App</span>
                        <h5 class="card-title mt-2">TryFit</h5>
                        <p class="card-text">Aplikasi yang membantu user untuk menemukan outfit harian yang cocok dengan dirinya.</p>
                        <button class="btn btn-sm btn-ink" data-bs-toggle="modal" data-bs-target="#detail" data-judul="TryFit" data-isi="Aplikasi mobile yang membantu menemukan outfit harian yang cocok sesuai selera/kepribadian user.">Baca selengkapnya</button>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="card h-100">
                    <img src="{{ Vite::asset('resources/images/project-3.svg') }}" class="card-img-top print" alt="Ilustrasi website komunitas">
                    <div class="card-body">
                        <span class="badge text-bg-warning">Web</span>
                        <h5 class="card-title mt-2">Website Komunitas Kampus</h5>
                        <p class="card-text">Halaman informasi kegiatan dan pendaftaran anggota.</p>
                        <button class="btn btn-sm btn-ink" data-bs-toggle="modal" data-bs-target="#detail" data-judul="Website Komunitas Kampus" data-isi="Situs statis responsif berisi jadwal kegiatan dan formulir pendaftaran.">Baca selengkapnya</button>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <hr class="rule">

    <!-- Arsip -->
    <section id="arsip" class="py-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <h3 class="section-title">Arsip Sejarah</h3>
                <ul class="list-group list-group-flush arsip">
                    <li class="list-group-item"><b>2024</b> Lulus sekolah SMA &amp; melakukan GAP YEAR 1 tahun.</li>
                    <li class="list-group-item"><b>2025</b> Resmi menjadi mahasiswa Sistem Informasi, Telkom University Surabaya.</li>
                    <li class="list-group-item"><b>2026</b> Mulai mendalami ilmu programming &amp; Pengolahan Data.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h3 class="section-title">Surat Pembaca</h3>
                <div class="accordion" id="surat">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#s1">Apakah bisa diajak kerja sama?</button></h2>
                        <div id="s1" class="accordion-collapse collapse show" data-bs-parent="#surat">
                            <div class="accordion-body">Bisa. Kirim pesan lewat Iklan Baris di bawah, dan akan dibalas secepatnya.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s2">Kenapa webnya berbentuk koran?</button></h2>
                        <div id="s2" class="accordion-collapse collapse" data-bs-parent="#surat"><div class="accordion-body">Karena cerita tentang diri sendiri lebih mudah dibaca bila disusun seperti berita.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s3">Pakai teknologi apa?</button></h2>
                        <div id="s3" class="accordion-collapse collapse" data-bs-parent="#surat"><div class="accordion-body">HTML, CSS, dan Bootstrap 5 (grid, navbar, tabel, kartu, modal, dan accordion).</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="rule">

    <!-- Iklan Baris -->
    <section id="kontak" class="py-4">
        <h3 class="section-title">Iklan Baris</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="ad">
                    <h4>DICARI</h4>
                    <p class="mb-0">Kesempatan magang, proyek kolaborasi, dan teman diskusi seputar web serta sistem informasi. Serius, santai, dan responsif.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ad">
                    <h4>HUBUNGI</h4>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-envelope"></i> <a href="mailto:outlano@gmail.com">outlano@gmail.com</a></li>
                        <li><i class="bi bi-instagram"></i> <a href="https://instagram.com/vennesaoutlano">@@vennesaoutlano</a></li>
                        <li><i class="bi bi-github"></i> <a href="https://github.com/vennesaoutlano06">github.com/vennesaoutlano06</a></li>
                        <li><i class="bi bi-linkedin"></i> <a href="https://linkedin.com/in/venesaoutlano">linkedin.com/in/venesaoutlano</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="text-center py-4 footer-paper">
    <div class="container">
        <p class="mb-1">Dicetak di Surabaya &middot; &copy; 2026 Venesa Outlano &middot; Dibuat dengan Bootstrap 5</p>
        <a href="#utama"><i class="bi bi-arrow-up-circle"></i> Kembali ke halaman depan</a>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h5 class="modal-title" id="mjudul"></h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button></div>
            <div class="modal-body" id="misi"></div>
        </div>
    </div>
</div>

@vite('resources/js/app.js')
<script>
    // Tanggal otomatis di masthead
    document.getElementById('tgl').textContent =
        new Date().toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });

    // Tombol mode gelap / terang
    const btn = document.getElementById('mode');
    btn.addEventListener('click', () => {
        const root = document.documentElement;
        const gelap = root.getAttribute('data-bs-theme') === 'dark';
        root.setAttribute('data-bs-theme', gelap ? 'light' : 'dark');
        btn.innerHTML = gelap ? '<i class="bi bi-moon-stars"></i> Mode Gelap' : '<i class="bi bi-sun"></i> Mode Terang';
    });

    // Isi modal dari atribut tombol
    document.getElementById('detail').addEventListener('show.bs.modal', e => {
        document.getElementById('mjudul').textContent = e.relatedTarget.dataset.judul;
        document.getElementById('misi').textContent = e.relatedTarget.dataset.isi;
    });
</script>
</body>
</html>
