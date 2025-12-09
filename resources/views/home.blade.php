<x-layouts.homepage title="Beranda Sekolah">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #fff;
            color: #2d3748;
            line-height: 1.6;
        }

        /* ===== HERO ===== */
        .hero {
            padding: 120px 0;
            text-align: center;
            background: #fff;
        }

        .hero-subtitle {
            font-size: 0.85rem;
            font-weight: 600;
            color: #4299e1;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #1a202c;
        }

        .hero-desc {
            font-size: 1.1rem;
            color: #4a5568;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* ===== SECTION ===== */
        .section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-label {
            font-size: 0.75rem;
            font-weight: 700;
            color: #4299e1;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
            display: block;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 16px;
        }

        .section-desc {
            font-size: 1rem;
            color: #4a5568;
            max-width: 600px;
            margin: 0 auto;
        }

        /* ===== GRID ===== */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 80px;
            margin-top: 80px;
        }

        .grid-item {
            text-align: center;
        }

        .grid-icon {
            font-size: 3rem;
            color: #4299e1;
            margin-bottom: 20px;
        }

        .grid-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 12px;
        }

        .grid-text {
            font-size: 0.95rem;
            color: #718096;
            line-height: 1.7;
        }

        /* ===== CONTENT SECTION ===== */
        .content-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-top: 60px;
        }

        .content-text h3 {
            font-size: 2rem;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 20px;
        }

        .content-text p {
            color: #4a5568;
            line-height: 1.8;
            margin-bottom: 16px;
            font-size: 0.95rem;
        }

        .content-text a {
            display: inline-block;
            color: #4299e1;
            text-decoration: none;
            font-weight: 600;
            margin-top: 12px;
            transition: all 0.3s ease;
        }

        .content-text a:hover {
            color: #2c5aa0;
        }

        .content-image {
            height: 400px;
            background: linear-gradient(135deg, #bee3f8 0%, #cbb5e2 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: #2d3748;
        }

        /* ===== LIST SECTION ===== */
        .list-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 60px;
            margin-top: 80px;
        }

        .list-item {
            text-align: center;
        }

        .list-icon {
            font-size: 2.5rem;
            color: #4299e1;
            margin-bottom: 20px;
        }

        .list-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 12px;
        }

        .list-text {
            font-size: 0.9rem;
            color: #718096;
            line-height: 1.6;
        }

        /* ===== INFO LINKS ===== */
        .info-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            margin-top: 80px;
        }

        .info-link {
            text-decoration: none;
            color: inherit;
            text-align: center;
        }

        .info-link-icon {
            font-size: 2rem;
            color: #4299e1;
            margin-bottom: 16px;
            display: block;
        }

        .info-link-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 8px;
        }

        .info-link-text {
            font-size: 0.9rem;
            color: #718096;
            line-height: 1.6;
        }

        /* ===== CTA ===== */
        .cta {
            background: linear-gradient(135deg, #4299e1 0%, #2c5aa0 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            border-radius: 12px;
            margin: 100px auto;
            max-width: 1200px;
        }

        .cta-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .cta-desc {
            font-size: 1rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.95;
        }

        .cta-btn {
            display: inline-block;
            background: white;
            color: #4299e1;
            padding: 12px 32px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .cta-btn:hover {
            background: #f0f0f0;
            transform: translateY(-2px);
        }

        /* ===== FOOTER ===== */
        .footer-section {
            text-align: center;
            padding: 60px 0;
        }

        .footer-title {
            font-size: 1.8rem;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .footer-item {
            text-align: center;
        }

        .footer-icon {
            font-size: 2rem;
            color: #4299e1;
            margin-bottom: 12px;
            display: block;
        }

        .footer-label {
            font-size: 0.95rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 8px;
        }

        .footer-text {
            font-size: 0.85rem;
            color: #718096;
            line-height: 1.6;
        }

        .footer-text a {
            color: #4299e1;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }

        /* ===== DARK MODE ===== */
        body.dark-mode {
            background: #1a202c;
            color: #e2e8f0;
        }

        body.dark-mode .hero {
            background: #1a202c;
        }

        body.dark-mode .section {
            background: #1a202c;
        }

        body.dark-mode .hero-title,
        body.dark-mode .section-title,
        body.dark-mode .grid-title,
        body.dark-mode .content-text h3,
        body.dark-mode .list-title,
        body.dark-mode .info-link-title,
        body.dark-mode .cta-title,
        body.dark-mode .footer-title,
        body.dark-mode .footer-label {
            color: #f7fafc;
        }

        body.dark-mode .hero-desc,
        body.dark-mode .section-desc,
        body.dark-mode .grid-text,
        body.dark-mode .content-text p,
        body.dark-mode .list-text,
        body.dark-mode .info-link-text,
        body.dark-mode .footer-text {
            color: #cbd5e1;
        }

        body.dark-mode .content-image {
            background: linear-gradient(135deg, rgba(66, 153, 225, 0.2) 0%, rgba(203, 181, 226, 0.1) 100%);
            color: #90cdf4;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero {
                padding: 80px 15px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .section {
                padding: 80px 15px;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .grid {
                gap: 40px;
                margin-top: 60px;
            }

            .content-section {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .content-image {
                height: 300px;
                font-size: 3rem;
            }

            .list-grid {
                gap: 40px;
            }

            .info-links {
                gap: 30px;
            }

            .cta {
                margin: 60px auto;
                padding: 60px 15px;
            }

            .footer-grid {
                gap: 30px;
            }

            .footer-section {
                padding: 60px 15px;
            }
        }
    </style>

    <div class="home-section">

        <!-- HERO -->
        <section class="hero">
            <div class="container">
                <div class="hero-subtitle">Selamat Datang</div>
                <h1 class="hero-title">Wujudkan Potensi Terbaik Anda</h1>
                <p class="hero-desc">
                    Kami adalah sekolah yang berkomitmen memberikan pendidikan berkualitas dengan guru berpengalaman, fasilitas lengkap, dan lingkungan belajar yang mendukung perkembangan akademik dan karakter siswa.
                </p>
            </div>
            </section>        <!-- PROGRAM -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Program Pendidikan</span>
                    <h2 class="section-title">Pilihan Program Kami</h2>
                    <p class="section-desc">Berbagai program akademik dirancang sesuai minat dan kebutuhan siswa</p>
                </div>

                <div class="grid">
                    <div class="grid-item">
                        <i class="fas fa-flask grid-icon"></i>
                        <h3 class="grid-title">Program IPA</h3>
                        <p class="grid-text">Fokus pada sains dan teknologi dengan fasilitas laboratorium modern dan praktik langsung untuk pemahaman yang mendalam.</p>
                    </div>

                    <div class="grid-item">
                        <i class="fas fa-globe grid-icon"></i>
                        <h3 class="grid-title">Program IPS</h3>
                        <p class="grid-text">Mempelajari kehidupan sosial, ekonomi, dan budaya dengan pendekatan kritis dan analitis untuk wawasan global.</p>
                    </div>

                    <div class="grid-item">
                        <i class="fas fa-book grid-icon"></i>
                        <h3 class="grid-title">Program Bahasa</h3>
                        <p class="grid-text">Menguasai berbagai bahasa asing melalui metode komunikatif dengan fokus pada kemampuan praktis berbicara.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- AKADEMIK -->
        <section class="section">
            <div class="container">
                <div class="content-section">
                    <div class="content-text">
                        <h3>Pembelajaran Berkualitas</h3>
                        <p>Setiap siswa mendapat perhatian personal dari guru berpengalaman. Kami menggabungkan metode pembelajaran tradisional dengan teknologi modern untuk hasil yang optimal.</p>
                        <p>Fasilitas lengkap termasuk perpustakaan digital, lab komputer, dan ruang diskusi interaktif mendukung proses pembelajaran yang efektif dan menyenangkan.</p>
                        <a href="/kurikulum">Pelajari Kurikulum →</a>
                    </div>
                    <div class="content-image">
                        <i class="fas fa-book-open"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- KEGIATAN -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Aktivitas Siswa</span>
                    <h2 class="section-title">Berbagai Kegiatan Menarik</h2>
                    <p class="section-desc">Program ekstrakurikuler dan kegiatan siswa untuk pengembangan bakat dan minat</p>
                </div>

                <div class="list-grid">
                    <div class="list-item">
                        <i class="fas fa-soccer-ball list-icon"></i>
                        <h3 class="list-title">Klub Olahraga</h3>
                        <p class="list-text">Berbagai cabang olahraga untuk mengembangkan kesehatan, disiplin, dan semangat tim yang solid.</p>
                    </div>

                    <div class="list-item">
                        <i class="fas fa-palette list-icon"></i>
                        <h3 class="list-title">Klub Seni</h3>
                        <p class="list-text">Mengeksplorasi kreativitas melalui seni visual, musik, dan pertunjukan seni yang menginspirasi.</p>
                    </div>

                    <div class="list-item">
                        <i class="fas fa-microscope list-icon"></i>
                        <h3 class="list-title">Riset Ilmiah</h3>
                        <p class="list-text">Mengembangkan kemampuan riset dan inovasi melalui proyek-proyek yang bermanfaat dan inovatif.</p>
                    </div>

                    <div class="list-item">
                        <i class="fas fa-newspaper list-icon"></i>
                        <h3 class="list-title">Jurnalistik</h3>
                        <p class="list-text">Mengasah kemampuan menulis dan komunikasi melalui media sekolah yang berkontribusi nyata.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRESTASI -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <span class="section-label">Keunggulan Kami</span>
                    <h2 class="section-title">Prestasi & Pencapaian</h2>
                    <p class="section-desc">Berbagai prestasi telah diraih siswa dan sekolah melalui kerja keras dan dedikasi</p>
                </div>

                <div class="grid">
                    <div class="grid-item">
                        <i class="fas fa-star grid-icon"></i>
                        <h3 class="grid-title">Terakreditasi A</h3>
                        <p class="grid-text">Akreditasi tertinggi membuktikan komitmen kami terhadap kualitas pendidikan yang terus berkembang.</p>
                    </div>

                    <div class="grid-item">
                        <i class="fas fa-medal grid-icon"></i>
                        <h3 class="grid-title">Juara Kompetisi</h3>
                        <p class="grid-text">Siswa kami secara konsisten meraih prestasi di berbagai kompetisi tingkat nasional dan regional.</p>
                    </div>

                    <div class="grid-item">
                        <i class="fas fa-graduation-cap grid-icon"></i>
                        <h3 class="grid-title">Alumni Sukses</h3>
                        <p class="grid-text">Alumni tersebar di universitas terkemuka dengan karir cemerlang di berbagai bidang industri.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- KARIR -->
        <section class="section">
            <div class="container">
                <div class="content-section">
                    <div class="content-image">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="content-text">
                        <h3>Persiapan Masa Depan</h3>
                        <p>Tim bimbingan karir kami siap membantu siswa merencanakan pendidikan lanjutan dan karir impian dengan konsultasi personal dan workshop pengembangan diri.</p>
                        <p>Kami memiliki koneksi luas ke universitas dan industri untuk memfasilitasi beasiswa, magang, dan peluang karir bagi siswa berprestasi.</p>
                        <a href="#contact">Konsultasi Gratis →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- INFORMASI -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Informasi Lengkap</h2>
                    <p class="section-desc">Akses informasi detail tentang sekolah, pembelajaran, dan organisasi siswa</p>
                </div>

                <div class="info-links">
                    <a href="/kesiswaan" class="info-link">
                        <i class="fas fa-users info-link-icon"></i>
                        <h3 class="info-link-title">Kesiswaan</h3>
                        <p class="info-link-text">Panduan siswa, aturan sekolah, kegiatan dan program pengembangan diri yang tersedia.</p>
                    </a>

                    <a href="/kurikulum" class="info-link">
                        <i class="fas fa-chalkboard info-link-icon"></i>
                        <h3 class="info-link-title">Kurikulum</h3>
                        <p class="info-link-text">Program pembelajaran, mata pelajaran, kompetensi yang dikembangkan, dan metode pengajaran.</p>
                    </a>

                    <a href="/komite" class="info-link">
                        <i class="fas fa-building info-link-icon"></i>
                        <h3 class="info-link-title">Komite Sekolah</h3>
                        <p class="info-link-text">Struktur organisasi, visi-misi, program kerja, dan peran dalam pengembangan sekolah.</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta">
            <div class="container">
                <h2 class="cta-title">Siap Bergabung?</h2>
                <p class="cta-desc">Daftarkan diri Anda sekarang dan jadilah bagian dari keluarga besar sekolah kami untuk masa depan yang lebih cerah.</p>
                <a href="https://ppdb.jakarta.go.id" target="_blank" class="cta-btn">Buka Portal PPDB</a>
            </div>
        </section>

        <!-- KONTAK -->
        <section class="footer-section" id="contact">
            <div class="container">
                <h2 class="footer-title">Hubungi Kami</h2>
                
                <div class="footer-grid">
                    <div class="footer-item">
                        <i class="fas fa-map-pin footer-icon"></i>
                        <h3 class="footer-label">Lokasi</h3>
                        <p class="footer-text">
                            Jl. Cincin Kota No. 8<br>
                            Karangsari, Kebumen 54351
                        </p>
                    </div>

                    <div class="footer-item">
                        <i class="fas fa-phone footer-icon"></i>
                        <h3 class="footer-label">Telepon</h3>
                        <p class="footer-text">
                            <a href="tel:0287381820">(0287) 381-820</a><br>
                            Senin - Jumat, 08:00 - 16:00
                        </p>
                    </div>

                    <div class="footer-item">
                        <i class="fas fa-envelope footer-icon"></i>
                        <h3 class="footer-label">Email</h3>
                        <p class="footer-text">
                            <a href="mailto:info@sekolah.id">info@sekolah.id</a><br>
                            Respons dalam 24 jam
                        </p>
                    </div>

                    <div class="footer-item">
                        <i class="fas fa-clock footer-icon"></i>
                        <h3 class="footer-label">Jam Kerja</h3>
                        <p class="footer-text">
                            Senin - Jumat<br>
                            07:00 - 15:30 WIB
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>

</x-layouts.homepage>
