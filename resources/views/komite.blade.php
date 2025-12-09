@php
$title = 'Komite Sekolah - SMAN 28 Jakarta';
@endphp

<x-layouts.homepage :title="$title">
    <style>
        .section-header {
            padding: 60px 0 40px;
            background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);
            color: white;
            margin-bottom: 50px;
        }

        .section-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .section-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Card Grid dengan Hover Effect */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #7c3aed 0%, #6d28d9 100%);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 12px;
            font-size: 1.3rem;
        }

        .card p {
            color: #666;
            line-height: 1.7;
            margin: 0;
        }

        /* Hero Section dengan Image */
        .hero-content {
            background: linear-gradient(135deg, #f3e8ff 0%, #ede9fe 100%);
            border-radius: 15px;
            padding: 50px;
            margin: 30px 0;
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .hero-text h2 {
            color: #6d28d9;
            font-weight: 800;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .hero-text p {
            color: #666;
            line-height: 1.8;
            margin: 0;
            font-size: 1.05rem;
        }

        .hero-number {
            font-size: 4rem;
            font-weight: 800;
            color: #7c3aed;
            text-align: center;
        }

        /* Struktur Organisasi */
        .org-chart {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 30px 0;
        }

        .org-level {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .org-level h4 {
            background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-bottom: 20px;
            min-width: 300px;
            font-weight: 700;
        }

        .org-roles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .role-box {
            background: linear-gradient(135deg, #f3e8ff 0%, #ede9fe 100%);
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #7c3aed;
        }

        .role-box h5 {
            color: #6d28d9;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .role-box p {
            color: #666;
            font-size: 0.9rem;
            margin: 0;
        }

        /* Bidang Kerja Timeline */
        .bidang-timeline {
            position: relative;
            padding: 40px 0;
        }

        .bidang-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #7c3aed 0%, #e9d5ff 100%);
        }

        .bidang-item {
            margin-bottom: 50px;
            position: relative;
        }

        .bidang-item:nth-child(odd) {
            margin-left: 0;
            margin-right: 52%;
            text-align: right;
        }

        .bidang-item:nth-child(even) {
            margin-left: 52%;
            margin-right: 0;
            text-align: left;
        }

        .bidang-marker {
            display: none;
        }

        .bidang-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .bidang-content h5 {
            color: #6d28d9;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .bidang-content p {
            color: #666;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.6;
        }

        /* Program Grid */
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .program-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            border-top: 4px solid #7c3aed;
            text-align: center;
        }

        .program-card-icon {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .program-card h5 {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .program-card p {
            color: #666;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.6;
        }

        /* FAQ Styled */
        .faq-item {
            background: white;
            padding: 25px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .faq-q {
            color: #1a1a1a;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-icon {
            font-size: 1.3rem;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        .faq-a {
            color: #666;
            line-height: 1.8;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-item.active .faq-a {
            max-height: 300px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
        }

        .dark-mode .card,
        .dark-mode .org-chart,
        .dark-mode .bidang-content,
        .dark-mode .program-card,
        .dark-mode .faq-item {
            background: #1e293b;
        }

        .dark-mode .card h3,
        .dark-mode .bidang-content h5,
        .dark-mode .program-card h5,
        .dark-mode .faq-q {
            color: #e2e8f0;
        }

        .dark-mode .card p,
        .dark-mode .bidang-content p,
        .dark-mode .program-card p,
        .dark-mode .faq-a {
            color: #cbd5e1;
        }

        .dark-mode .hero-content {
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.1) 0%, rgba(109, 40, 217, 0.1) 100%);
        }

        .dark-mode .role-box {
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.1) 0%, rgba(109, 40, 217, 0.1) 100%);
        }

        .dark-mode .hero-text h2 {
            color: #a78bfa;
        }

        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
                padding: 30px;
            }

            .bidang-timeline::before {
                left: 20px;
            }

            .bidang-item:nth-child(odd),
            .bidang-item:nth-child(even) {
                margin-left: 60px;
                margin-right: 0 !important;
                text-align: left !important;
            }

            .bidang-marker {
                left: 20px;
            }
        }
    </style>

    <div class="section-header">
        <div class="container">
            <h1>Komite Sekolah</h1>
            <p>Mitra Strategis dalam Meningkatkan Mutu Pendidikan</p>
        </div>
    </div>

    <div class="container py-5">
        <!-- Intro Section -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">💼 Tentang Komite Sekolah</h2>
            <div class="hero-content">
                <div class="hero-text">
                    <h2>Mitra Independen Sekolah</h2>
                    <p>Komite Sekolah SMAN 28 Jakarta adalah organisasi independen yang terdiri dari orang tua siswa, 
                    tokoh masyarakat, dunia usaha, dan profesional yang berkomitmen meningkatkan mutu pendidikan. 
                    Kami memiliki peran strategis dalam advokasi, dukungan, pengawasan, dan mediasi untuk kemajuan sekolah.</p>
                </div>
                <div class="hero-number">25</div>
            </div>
        </section>

        <!-- Visi Misi Cards -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">🎯 Visi & Misi Komite</h2>
            <div class="card-grid">
                <div class="card">
                    <div class="card-icon">👁️</div>
                    <h3>Visi Kami</h3>
                    <p>Menjadi mitra strategis sekolah dalam menciptakan lingkungan pembelajaran yang kondusif, inklusif, 
                    dan mendukung pengembangan potensi optimal setiap siswa untuk masa depan yang cerah.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🎯</div>
                    <h3>Misi Kami</h3>
                    <p>Memberikan masukan strategis, melakukan pengawasan transparan, menggalang sumber daya, 
                    membina hubungan harmonis, dan mendukung peningkatan mutu pendidikan secara berkelanjutan.</p>
                </div>
                <div class="card">
                    <div class="card-icon">📊</div>
                    <h3>Komposisi Anggota</h3>
                    <p>25 anggota terdiri dari orang tua (40%), tokoh masyarakat (20%), dunia usaha (20%), 
                    pendidik (15%), dan profesional (5%) yang berdedikasi tinggi.</p>
                </div>
            </div>
        </section>

        <!-- Struktur Organisasi -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">🏛️ Struktur Organisasi</h2>
            <div class="org-chart">
                <div class="org-level">
                    <h4>🎖️ Ketua Komite Sekolah</h4>
                    <p style="color: #666; margin-top: 15px;">Memimpin & mengkoordinasikan seluruh kegiatan komite serta berinteraksi langsung dengan Kepala Sekolah</p>
                </div>

                <div class="org-roles">
                    <div class="role-box">
                        <h5>Wakil Ketua</h5>
                        <p>Mendampingi ketua dan menjalankan tugas saat ketua berhalangan</p>
                    </div>
                    <div class="role-box">
                        <h5>Sekretaris</h5>
                        <p>Menangani administrasi, dokumentasi & komunikasi internal</p>
                    </div>
                    <div class="role-box">
                        <h5>Bendahara</h5>
                        <p>Mengelola keuangan dan sumber daya komite sekolah</p>
                    </div>
                </div>

                <div style="margin-top: 50px; padding-top: 30px; border-top: 2px solid #e2e8f0;">
                    <h4 style="color: #1a1a1a; font-size: 1.3rem; margin-bottom: 30px;">📋 Lima Bidang Kerja Utama</h4>
                    <div class="bidang-timeline">
                        <div class="bidang-item">
                            <div class="bidang-marker"></div>
                            <div class="bidang-content">
                                <h5>1. Peningkatan Mutu Pendidikan</h5>
                                <p>Fokus pada kualitas pembelajaran, prestasi siswa, dan pengembangan kurikulum yang relevan</p>
                            </div>
                        </div>

                        <div class="bidang-item">
                            <div class="bidang-marker"></div>
                            <div class="bidang-content">
                                <h5>2. Sarana & Prasarana</h5>
                                <p>Mengawasi dan mendukung pengembangan infrastruktur sekolah yang memadai</p>
                            </div>
                        </div>

                        <div class="bidang-item">
                            <div class="bidang-marker"></div>
                            <div class="bidang-content">
                                <h5>3. Hubungan Masyarakat & Kemitraan</h5>
                                <p>Menjalin hubungan harmonis dengan orang tua, masyarakat, dan dunia usaha</p>
                            </div>
                        </div>

                        <div class="bidang-item">
                            <div class="bidang-marker"></div>
                            <div class="bidang-content">
                                <h5>4. Pendanaan & Sumber Daya</h5>
                                <p>Menggalang dana dan sumber daya pendukung untuk kemajuan sekolah</p>
                            </div>
                        </div>

                        <div class="bidang-item">
                            <div class="bidang-marker"></div>
                            <div class="bidang-content">
                                <h5>5. Pengawasan & Evaluasi</h5>
                                <p>Melakukan pengawasan transparan dan evaluasi kinerja pengelolaan sekolah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Peran & Fungsi -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">⭐ Empat Peran Strategis Komite</h2>
            <div class="card-grid">
                <div class="card">
                    <div class="card-icon">💡</div>
                    <h3>Pertimbangan</h3>
                    <p>Memberikan masukan, saran, dan pertimbangan dalam perencanaan program, pengelolaan keuangan, dan pengambilan keputusan strategis sekolah.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🤝</div>
                    <h3>Dukungan</h3>
                    <p>Menggalang sumber daya masyarakat, mendukung program sekolah, dan membantu pengembangan infrastruktur serta sarana pembelajaran.</p>
                </div>
                <div class="card">
                    <div class="card-icon">👁️</div>
                    <h3>Pengawasan</h3>
                    <p>Melakukan monitoring terhadap pengelolaan keuangan, kualitas layanan pendidikan, dan pencapaian target sekolah secara transparan.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🤲</div>
                    <h3>Mediasi</h3>
                    <p>Menjadi penghubung antara sekolah, orang tua, dan masyarakat untuk menyelesaikan konflik secara konstruktif dan harmonis.</p>
                </div>
            </div>
        </section>

        <!-- Program Unggulan -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">🚀 Program Unggulan Komite Sekolah</h2>
            <div class="program-grid">
                <div class="program-card">
                    <div class="program-card-icon">🎓</div>
                    <h5>Program Beasiswa</h5>
                    <p>Memberikan beasiswa kepada siswa berprestasi dan siswa kurang mampu untuk aksesibilitas pendidikan</p>
                </div>
                <div class="program-card">
                    <div class="program-card-icon">🏗️</div>
                    <h5>Program Pembangunan</h5>
                    <p>Pengembangan infrastruktur dan renovasi fasilitas sekolah untuk meningkatkan kenyamanan belajar</p>
                </div>
                <div class="program-card">
                    <div class="program-card-icon">🔬</div>
                    <h5>Penunjang Pendidikan</h5>
                    <p>Pengadaan alat pembelajaran, buku, dan peningkatan sarana belajar yang berkualitas</p>
                </div>
                <div class="program-card">
                    <div class="program-card-icon">🤝</div>
                    <h5>Program Kemitraan</h5>
                    <p>Menjalin kerjasama dengan institusi, perusahaan, dan organisasi untuk pengembangan sekolah</p>
                </div>
                <div class="program-card">
                    <div class="program-card-icon">💼</div>
                    <h5>Program Karir</h5>
                    <p>Membuka peluang magang, mentoring, dan beasiswa untuk siswa berprestasi dan berbakat</p>
                </div>
                <div class="program-card">
                    <div class="program-card-icon">🌱</div>
                    <h5>Program CSR Sosial</h5>
                    <p>Kegiatan tanggung jawab sosial dan pemberdayaan masyarakat sekitar sekolah</p>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">❓ Pertanyaan Umum (FAQ)</h2>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">
                    <span>Bagaimana cara menjadi anggota Komite Sekolah?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-a">
                    Anda dapat mendaftar sebagai calon anggota komite melalui seleksi terbuka yang dilakukan setiap tahun. 
                    Kriteria meliputi komitmen terhadap pendidikan, rekam jejak baik, dan bersedia melayani tanpa bayaran. 
                    Silakan hubungi sekretariat komite untuk informasi pendaftaran.
                </div>
            </div>

            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">
                    <span>Berapa lama masa jabatan anggota Komite?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-a">
                    Masa jabatan anggota Komite Sekolah adalah 3 (tiga) tahun dan dapat dipilih kembali untuk masa 
                    jabatan berikutnya, maksimal 2 (dua) periode berturut-turut sesuai regulasi yang berlaku.
                </div>
            </div>

            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">
                    <span>Apakah ada biaya untuk bergabung dengan Komite?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-a">
                    Tidak ada biaya untuk bergabung dengan Komite Sekolah. Komite Sekolah bersifat sukarela dan tidak 
                    mengutamakan hasil finansial, tetapi komitmen dan dedikasi tinggi terhadap peningkatan mutu pendidikan.
                </div>
            </div>

            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">
                    <span>Bagaimana cara mengajukan saran atau keluhan?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-a">
                    Anda dapat mengajukan saran atau keluhan melalui: 1) Email komite@sman28jkt.sch.id, 2) Telepon 
                    (021) 7806293 ext. 103, 3) Datang langsung ke ruang Komite, atau 4) Form online di website sekolah. 
                    Semua masukan akan ditangani secara rahasia dan konstruktif.
                </div>
            </div>

            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">
                    <span>Kapan Komite mengadakan pertemuan dengan orang tua?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-a">
                    Komite Sekolah mengadakan pertemuan dengan orang tua minimal 2 kali dalam satu tahun akademik, 
                    biasanya di awal dan akhir tahun ajaran. Selain itu, komite juga hadir dalam acara-acara sekolah 
                    penting seperti penerimaan rapor dan acara evaluasi tahunan.
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="mb-5">
            <h2 class="mb-4" style="color: #1a1a1a; font-weight: 700;">📞 Hubungi Komite Sekolah</h2>
            <div class="hero-content">
                <div class="hero-text">
                    <h2>Mari Terhubung</h2>
                    <p><strong>Email:</strong> komite@sman28jkt.sch.id</p>
                    <p><strong>Telepon:</strong> (021) 7806293 ext. 103</p>
                    <p><strong>Jam Operasional:</strong> Senin-Jumat 07:00-16:00 WIB, Sabtu 07:00-12:00 WIB</p>
                    <p><strong>Lokasi:</strong> Gedung Utama Lantai 1, SMAN 28 Jakarta</p>
                </div>
                <div style="text-align: center; font-size: 4rem;">💬</div>
            </div>
        </section>
    </div>

    <script>
        function toggleFaq(element) {
            element.classList.toggle('active');
        }
    </script>
</x-layouts.homepage>
